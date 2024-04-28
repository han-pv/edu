@extends('layouts.app')
@section('title')
    Courses
@endsection
@section('content')
    <div class="container-xl">
        <div class="row my-5 g-4">
            @forelse($objs as $obj)
            <div class="col-12 col-md-6">
                <div class="bg-dark bg-opacity-10 border rounded-3 h-100 p-4">
                    <div class="text-primary h6 mt-3 mb-0 ms-2 ">
                        {{$obj->category->name}}
                    </div>
                    <div class="h4 fw-bold ms-2">
                        {{$obj->name}}
                    </div>
                    <p class="h6 opacity-75 my-3">
                        {{$obj->description}}
                    </p>
                    <ul class="h6 small">
                        @foreach($obj->lessons as $lesson)
                        <li>
                            {{$lesson->name}}
                        </li>
                        @endforeach
                    </ul>
{{--                    <ul class="h6 text-danger small">--}}
{{--                        @foreach($obj->teachers as $teacher)--}}
{{--                            <li>--}}
{{--                                {{$obj->groups}}--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}

                </div>

            </div>
            @empty
                <div class="display-3 text-center mt-4">Course not found</div>
            @endforelse
        </div>
    </div>

{{--            @foreach($courses as $course)--}}
{{--                <div class="h4 text-primary mb-3">--}}
{{--                    {{$course->category->name}}--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--                @if($category->courses->isNotEmpty())--}}
{{--                    {{ $category->courses->first()->name }}--}}
{{--                @endif--}}

@endsection
