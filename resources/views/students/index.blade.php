@extends('layouts.app')
@section('title')
    Students
@endsection
@section('content')

    <div class="bg-dark">
        <div class="container-xl py-4">
            @include('app.filter')
        </div>
    </div>
    <div>
        <div class="container-xl">
            <div class="h3 fw-bold text-success my-4">
                Students
            </div>
            <div class="col-12">
                <div class="row g-3">
                    @forelse($objs as $obj)
                        @include('students.student')
                    @empty
                        <div class="col-12">
                            <div class="fs-1 text-center rounded border p-5">
                                Student not found
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

@endsection
