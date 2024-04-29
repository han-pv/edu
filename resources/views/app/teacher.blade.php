<div class=" bg-dark bg-opacity-10 fw-semibold border rounded p-3">
    <div class="row">
        <div class="col-2">
            <div class="text-center">
                <div class="">
                    <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid" style="width: 80px">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row g-2">
                <div class="col-3 text-truncate">
                    <span class="text-secondary">Name:</span>
                    <span>
                        {{ $teacher->name }}
                    </span>
                </div>

                <div class="col-3">
                    <span class="text-secondary">Degree:</span>
                    <span>
                        {{ $teacher->degree }}
                    </span>
                </div>

                <div class="col-4">
                    <span class="text-secondary">Category:</span>
                    <span class="">
                        {{ $teacher->category->name }}
                    </span>
                </div>

                <div class="col-3">
                    <span class="text-secondary">Surname:</span>
                    <span>
                        {{ $teacher->surname }}
                    </span>
                </div>

                <div class="col-3">
                    <span class="text-secondary">Experience:</span>
                    <span>
                        {{ $teacher->experience }} years
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
