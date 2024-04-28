@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div>
        <div class="h4 text-primary mb-3">
            BRANDS
        </div>
        <div class="container-xl">
            <div class="row row-cols-7 g-4">
                @foreach($categories as $category)
                    <div class="col">
                        <div class="border rounded-2 p-2 h-100">
                            <a href="{{ route('courses.index', ['category' => $category->id]) }}">
                                <div class="h6">
                                    {{ $category->name }}

                                    {{--                                <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">--}}
                                    {{--                                    @if($category->courses->isNotEmpty())--}}
                                    {{--                                        {{ $category->courses->first()->name }}--}}
                                    {{--                                    @endif--}}
                                    {{--                                        @foreach($category->courses as $courses)--}}
                                    {{--                                            {{ $courses->name }}--}}
                                    {{--                                            <br>--}}
                                    {{--                                        @endforeach--}}
                                    {{--                                </span>--}}
                                </div>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
