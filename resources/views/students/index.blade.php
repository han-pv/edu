@extends('layouts.app')
@section('title')
    Courses
@endsection
@section('content')
    @section('content')
        <div class="bg-dark">
        <div class="container py-4">
            @include('app.filter')
            <div class="row g-4">
                <div class="col-md-4 col-xl-3">
{{--                    @foreach($categories as $category)--}}
{{--                        <a href="/students?category={{ $category->id }}" {{ $category->id == $f_category ? 'selected':'' }}>--}}
{{--                            {{ $category->name }}--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                    @include('app.filter')--}}
                </div>
                <div class="col-6">
                    <div class="row g-3">
                        @forelse($objs as $obj)
{{--                            <div class="{{ $obj->course->id  ? 'text-danger':'' }}">fff</div>--}}
{{--                            {{$obj->course->name}}--}}
                        @empty
                            <div class="col-12">
                                <div class="fs-1 text-center rounded border p-5">
                                    Car not found :(
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <div class="pt-4">
{{--                        {{ $objs->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
@endsection
