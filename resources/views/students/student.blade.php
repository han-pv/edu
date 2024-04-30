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
                {{ $obj->name }}
            </span>
                </div>

                <div class="col-2">
                    <span class="text-secondary">Gender:</span>
                    <span class="{{ $obj->gender == $f_gender ? 'mark':'' }}">
                {{ $obj->gender }}
            </span>
                </div>

                <div class="col-4">
                    <span class="text-secondary">Category:</span>
                    <span class="{{ $obj->category->id == $f_category ? 'mark':'' }}">
                {{ $obj->category->name }}
            </span>
                </div>

                <div class="col-3">
                    <span class="text-secondary">Group:</span>
                    <span class="{{ $obj->group->id == $f_group ? 'mark':'' }}">
                {{ $obj->group->name }}
            </span>
                </div>

                <div class="col-3">
                    <span class="text-secondary">Surname:</span>
                    <span>
                {{ $obj->surname }}
            </span>
                </div>

                <div class="col-2">
                    <span class="text-secondary">Age:</span>
                    <span class="{{ $obj->age == $f_age ? 'mark':'' }}">
                {{ $obj->age }}
            </span>
                </div>

                <div class="col-4">
                    <span class="text-secondary">Course:</span>
                    <span class="{{ $obj->course->id == $f_course ? 'mark':'' }}">
                {{ $obj->course->name }}
            </span>
                </div>

                <div class="col-3">
                    <span class="text-secondary">Grade:</span>
                    <span class="{{ $obj->gradeLevel == $f_gradeLevel ? 'mark':'' }}">
                {{ $obj->gradeLevel }}
                <span class="text-success">
                    {{ $obj->gradeLevel >= 8 ? '| Excellent':'' }}
                </span>
                <span class="text-primary">
                    {{ $obj->gradeLevel >= 4 && $obj->gradeLevel < 8 ? '| Average':'' }}
                </span>
                <span class="text-danger">
                    {{ $obj->gradeLevel <= 3 ? '| Low':'' }}
                </span>
                </span>
                </div>
            </div>
        </div>
    </div>
</div>
