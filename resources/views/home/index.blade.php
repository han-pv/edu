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
                            <a class="h5 mt-auto w-100 h-100 fw-bold btn text-decoration-none btn-success }}" href="{{ route('courses.index', ['category' => $category->id]) }}">
                                {{ $category->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl">
        <div class="row my-3 g-5">
            @forelse($objs as $obj)
                @include('app.course')
            @empty
                <div class="display-3 text-center mt-4">Course not found</div>
            @endforelse
        </div>
    </div>
@endsection
