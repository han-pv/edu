@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div class="bg-dark">
        <div class="container-xl">
            <div class="col-12 py-5">
                <div class="row d-flex text-center g-4">
                    @foreach($categories as $category)
                        <div class="col">
                            <a class="h5 mt-auto w-100 h-100 fw-bold btn text-decoration-none btn-success text-center}}" href="{{ route('courses.index', ['category' => $category->id]) }}">
                                {{ $category->name }} <br> <span class="rounded bg-warning text-white px-1"><i class="bi bi-people-fill"></i> {{$category->students_count}}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl">
        <a class="text-decoration-none link-success link-offset-2-hover" href="{{ route('courses.index')}}">
            <div class="h3 fw-bold mt-5">
                Courses
            </div>
        </a>

        <div class="row mb-5 mt-3 g-4">
            @foreach($objs as $obj)
                @include('app.course')
            @endforeach
        </div>
    </div>


@endsection
