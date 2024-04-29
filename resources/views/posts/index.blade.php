@extends('layouts.app')
@section('title')
    Teachers
@endsection
@section('content')
    <div class="container-xl">
        <div class="h3 fw-bold text-success my-4">
            Teachers
        </div>
            <div class="col-12 my-4">
                <div class="row g-3">
                    @forelse($teachers as $teacher)
                        @include('app.teacher')
                    @empty
                        <div class="col-12">
                            <div class="fs-1 text-center rounded border p-5">
                                Teacher not found
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
@endsection
