<div class="pt-2 pb-5 border-bottom">
    <div class="col-12 mt-2 mb-4">
        <div class="row d-flex text-center g-4">
            @foreach($categories as $category)
            <div class="col">
                <a class="h5 mt-auto w-100 h-100 fw-bold btn text-decoration-none {{ $category->id == $f_category ? 'btn-secondary':'btn-success' }}" href="/students?category={{ $category->id }}">
                {{ $category->name }}
                </a>

            </div>
            @endforeach
        </div>
    </div>
{{--    <a href="/students?category={{ $category->id }}" {{ $category->id == $f_category ? 'selected':'' }}>--}}
{{--        {{ $category->name }}--}}
{{--    </a>--}}


    {{--    @foreach($categories as $category)--}}
{{--        {{$category->name}}--}}
{{--    @endforeach--}}
{{--    --}}

    <form class="row d-flex text-white-50" action="{{ url()->current() }}" method="get">

        <div class="col-3">
            <label for="course" class="fw-bold mb-2">Course:</label>
            <select class="border rounded w-100 py-2" id="course" name="course">
                <option value>-</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ $course->id == $f_course ? 'selected':'' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-3">
            <label for="group" class="fw-bold mb-2">Group:</label>
            <select class="border rounded w-100 py-2" id="group" name="group">
                <option value>-</option>
                @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ $group->id == $f_group ? 'selected':'' }}>
                        {{ $group->course->name }} | {{ $group->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-2">
            <label for="gender" class="fw-bold mb-2">Gender:</label>
            <select class="border rounded w-100 py-2" id="gender" name="gender">
                <option value>-</option>
                    <option value="Female"  {{ $f_gender == 'Female' ? 'selected':'' }}>
                        Female
                    </option>
                    <option value="Male"  {{ $f_gender == 'Male' ? 'selected':'' }}>
                        Male
                    </option>
            </select>
        </div>

        <div class="col-2">
            <label for="age" class="fw-bold mb-2">Age: </label>
                <input type="text" class="border rounded w-100 py-2" id="age" name="age" placeholder="18-35">
        </div>

        <div class="col-2">
            <div class=""> </div>
            <div class="row g-2 mt-4">
                <div class="col h-100">
                    <button type="submit" class="btn btn-success w-100 h-100"><i class="bi bi-search"></i></button>
                </div>
                <div
                    class="col">
                    <a href="{{ url()->current() }}" class="btn btn-secondary w-100  h-100"><i class="bi bi-x-lg"></i></a>
                </div>
            </div>
        </div>

    </form>
</div>
