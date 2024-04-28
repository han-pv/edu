@extends('layouts.app')
@section('title')
    Courses
@endsection
@section('content')
    <div class="container-xl">
        <div class="h4 text-primary mb-3">

            @forelse($objs as $obj)
                <div class="col-12">
                    @include('app.course')
                </div>
            @empty

            @endforelse
{{--            @foreach($courses as $course)--}}
{{--                <div class="h4 text-primary mb-3">--}}
{{--                    {{$course->category->name}}--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--                @if($category->courses->isNotEmpty())--}}
{{--                    {{ $category->courses->first()->name }}--}}
{{--                @endif--}}
        </div>

    </div>
@endsection
