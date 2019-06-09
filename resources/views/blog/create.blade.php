@extends('layout.master')
@section('content')
<h1><?php echo $title; ?></h1>
<form action="{{route('blog.store')}}" method="post">
    @include('blog._form')
    <button class="btn-info" type="submit">Create</button>
</form>
@endsection