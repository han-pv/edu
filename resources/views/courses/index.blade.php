@extends('layouts.app')
@section('title')
    Courses
@endsection
@section('content')

    <div class="container-xl">
        <div class="row my-5 g-5">
            @forelse($objs as $obj)
                @include('app.course')
            @empty
                <div class="display-3 text-center mt-4">Course not found</div>
            @endforelse
        </div>
    </div>
@endsection
