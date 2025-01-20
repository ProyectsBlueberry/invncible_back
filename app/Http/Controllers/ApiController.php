<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Customers;
use App\Models\Form;
use App\Models\Questions;
use App\Models\Services;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function all_services($leng)
    {
        $services = Services::where('status', 'active')->where('language', $leng)->where('general', false)->get();
        return response()->json($services);
    }

    public function questions_to_answer($id_service)
    {
        $all_questions_grouped = [];

        // Obtener el servicio solicitado
        $service = Services::find($id_service);
        $questions_service = $service->questions()
            ->with('options')
            ->where('status', 'active')
            ->orderBy('order', 'asc')
            ->get();

        $all_questions_grouped[$service->service] = $questions_service;

        // Obtener los servicios generales activos
        $general_services = Services::activeGeneralServices($service->language)->get();

        // Agregar preguntas agrupadas por servicio general
        foreach ($general_services as $general_service) {
            $all_questions_grouped[$general_service->service] = $general_service->questions;
        }

        // Ordenar para mover los servicios con valores negativos de `order` al final
        uksort($all_questions_grouped, function ($service_a, $service_b) use ($service, $general_services) {
            $order_a = Services::where('service', $service_a)->value('order');
            $order_b = Services::where('service', $service_b)->value('order');

            // Si `order` es negativo, asignar un valor alto
            $order_a = (int) $order_a < 0 ? PHP_INT_MAX : (int) $order_a;
            $order_b = (int) $order_b < 0 ? PHP_INT_MAX : (int) $order_b;

            return $order_a <=> $order_b;
        });

        return response()->json($all_questions_grouped);
    }

    public function find_customer($email)
    {
        $user = Customers::where('email', $email)->first();
        if ($user) {
            return response()->json([
                'status' => 200,
                'data' => $user
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Customer not found'
            ], 404);
        }
    }
    public function saveForm(Request $request)
    {
        try {
            $newForm = null;
            $data = $request->json()->all();
            $customer = Customers::firstOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'type' => $data['type'],
                    'phone' => $data['phone'],
                    'origin' => $data['hear'],
                ]
            );

            // Obtener el último número de formulario y crear el nuevo formulario
            $lastFormNumber = $customer->forms()->latest('id')->value('number') ?? 0;

            $newForm = $customer->forms()->create([
                'number' => $lastFormNumber + 1,
            ]);

            $data = $request->input('infoForm');

            if ($newForm) {

                $processedData = [];

                foreach ($data as $key => $value) {

                    $parts = explode('_', $key);

                    $firstWord = $parts[0];
                    $lastPart = end($parts);

                    $processedData[] = [
                        'id_form' => $newForm->id,
                        'id_question' => $lastPart,
                        'answer' => $value,
                        'updated_at' => now(),
                        'created_at' => now(),
                    ];
                }
                Answers::insert($processedData);
            }
            return response()->json([
                'success' => true,
                'message' => 'Datos recibidos correctamente.',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 404,
                'message' => $th->getMessage(),
            ], 404);
        }
    }
}
