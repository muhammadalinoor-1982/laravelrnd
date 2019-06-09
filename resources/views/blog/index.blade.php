<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>{{$title}}</title>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
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
        </div>
    </div>
</body>
</html>