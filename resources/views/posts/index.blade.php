@extends('layouts.app')
@section('title')
    Teachers
@endsection
@section('content')
    <div class="container-xl">
        <div class="h3 fw-bold text-success my-4">
            Posts
        </div>
            <div class="col-12 my-4">
                <div class="row row-cols-2 g-5">
                    @foreach($posts as $post)
                        <div class="col">
                            <div class="rounded border bg-dark bg-opacity-10 h-100 p-3">
                                <div class="col">
                                    <div class="h4 ">{{$post->title}}</div>
                                    <div class="h6 text-secondary ">{{$post->content}}...</div>
                                    <div class="d-flex fw-bold m-3">
                                        <div class="text-success"><i class="bi bi-person-circle"></i> {{$post->teacher->name}} {{$post->teacher->surname}}</div>
                                    </div>
                                    <div class="d-flex fw-bold m-3">
                                        <div class="text-secondary fst-italic small">{{$post->created_at}} | </div>
                                        <div class="text-success small"> <i class="bi bi-eye"></i> {{$post->view_count}}</div>
                                        <div class="text-success small ms-3"><i class="bi bi-heart"></i> {{$post->like_count}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
@endsection
