@extends('layout.master')
@section('content')
    <a class="btn btn-info" href="<?php echo route('blog.create'); ?>">Add new blog</a>
    <table class="table table-bordered">
        <tr style="text-align: center">
            <th>ID</th>
            <th>TITLE</th>
            <th>DETAILS</th>
            <th>ACTIONS</th>
        </tr>
        <?php /*foreach ($blogs as $blog){*/ ?>
        @foreach($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->details}}</td>
                <td>
                    <a style="float: left;" class="btn btn-info" href="{{route('blog.edit',$blog->id)}}">Edit</a>
                    <form style="float: left;" action="{{route('blog.destroy',$blog->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        &nbsp;&nbsp; <button onclick="return confirm('are you sure !!')" class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    @endsection