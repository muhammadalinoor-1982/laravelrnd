@extends('layout.master')
@section('content')
    <h1><?php echo $title; ?></h1>
    <form action="{{route('blog.update',$blog->id)}}" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('blog._form')
        <button class="btn-info" type="submit">Update</button>
    </form>
        @endsection
