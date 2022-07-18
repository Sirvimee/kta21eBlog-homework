@extends('layout')
@section('title', 'user', 'Posts')
@section('content')
    <a href="{{url()->previous() == url()->current() ? route('posts') : url()->previous()}}" class="btn btn-primary">Back</a>
    <a class="btn btn-warning" href="{{route('admin.posts.edit', ['post' => $post])}}">Edit</a>

    <table class="table table-bordered table-striped">
        <tbody>
        <tr>
            <th scope="row">Id</th>
            <td>{{$post->id}}</td>
        </tr>
        <tr>
            <th scope="row">Title</th>
            <td>{{$post->title}}</td>
        </tr>
        <tr>
            <th scope="row">Body</th>
            <td>{{$post->body}}</td>
        </tr>
        <tr>
            <th scope="row">Created at</th>
            <td>{{$post->created_at}}</td>
        </tr>
        <tr>
            <th scope="row">Published at</th>
            <td>{{$post->published_at}}</td>
        </tr>
        <tr>
            <th scope="row">Updated at</th>
            <td>{{$post->updated_at}}</td>
        </tr>
        </tbody>
    </table>

@endsection
