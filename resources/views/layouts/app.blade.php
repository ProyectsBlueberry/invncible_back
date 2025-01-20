<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('css/bootstrap/assets/libs/jquery-steps/steps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/dist/css/style.css') }}" rel="stylesheet">
    <!--Style Tabla-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    @stack('styles')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/dev/design_system.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dev/user_portal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dev/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @stack('modals')
            {{ $slot }}
        </main>
    </div>
    <script src="{{ asset('css/bootstrap/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap/assets/extra-libs/taskboard/js/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('css/bootstrap/assets/libs/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('css/bootstrap/dist/js/app.min.js') }}"></script>
    {{-- <script src="{{ asset('css/bootstrap/dist/js/app.init.js') }}"></script> --}}

    <!--This page JavaScript -->
    <script src="{{ asset('css/bootstrap/assets/libs/moment/min/moment.min.js') }}"></script>
    {{-- Wizard Form --}}
    <script src="{{ asset('css/bootstrap/assets/libs/jquery-steps/build/jquery.steps.js') }}"></script>
    <script src="{{ asset('css/bootstrap/assets/libs/jquery-validation/dist/jquery.validate.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('scripts')
    <script>
        document.addEventListener('executeJavaScript', () => {
            $('#btn-close').trigger('click');
        })
    </script>
</body>

</html>
