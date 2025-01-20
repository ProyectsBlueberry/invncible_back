<div wire:ignore.self class="modal fade" id="{{ $id }}" data-bs-backdrop="static" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog {{ $id == 'make-link-create-account-user' ? 'modal-xl' : 'modal-slg'}}">
        <div class="modal-content modal-body-dark">
            <div class="modal-body  mb-3">
                <div class="row text-center">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button type="button" style="filter: invert(100%) sepia(0%) saturate(7500%) hue-rotate(334deg) brightness(110%) contrast(100%);" class="btn-close  me-2" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="col-md-12">
                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785564/logo-light_uijolx.gif" alt="logo" width="100" class="mx-auto">
                    </div>
                    <div class="col-md-12 mb-2">
                        <h4 class="{{$title == 'Borrar registro' ? 'f-He-Bold t-p my-2 txt-red' : 'f-He-Bold t-p my-2 txt-white'}}" >
                            {{ $title }}
                        </h4>
                    </div>
                </div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
