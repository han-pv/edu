<div class="col-12 col-md-6 position-relative">
    <div class="bg-dark bg-opacity-10 border rounded-3 h-100 p-4">
        <div class="position-absolute bottom-0 end-0 me-5">
            @if($obj->image)

            @else
                <div class="">
                    <img src="{{ asset('img/card-bg-img.png') }}" alt="" class="img-fluid" style="width: 300px">
                </div>
            @endif
        </div>
        <a class="text-success fw-bold h6 mt-3 mb-0 ms-2 text-decoration-none " href="{{ route('courses.index', ['category' => $obj->category->id]) }}">
            {{$obj->category->name}}
        </a>
        <div>
            <a class=" h4 fw-bold ms-2 text-decoration-none" href="{{ route('courses.index', ['category' => $obj->category->id]) }}">
                {{$obj->name}}
            </a>
            <div>{{$obj->students_count}}</div>
        </div>
        <p class="h6 opacity-75 my-3">
            {{$obj->description}}
        </p>
        <div class="h6 mt-3">
            Lessons:
        </div>
        <ul class="h6 small">
            @foreach($obj->lessons as $lesson)
                <li>
                    {{$lesson->name}}
                </li>
            @endforeach
        </ul>
    </div>
</div>



