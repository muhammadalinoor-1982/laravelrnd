<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <a class="btn btn-info" href="<?php echo url('blog/create'); ?>">Add new blog</a>
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>details</th>
                    <th>actions</th>
                </tr>
                <?php foreach ($blogs as $blog){ ?>
                    <tr>
                        <td><?php echo $blog->id; ?></td>
                        <td><?php echo $blog->title; ?></td>
                        <td><?php echo $blog->details; ?></td>
                        <td>
                            <a class="btn btn-info" href="<?php echo url('blog/edit/'.$blog->id); ?>">Edit</a>
                            <form style="float: left;" action="<?php echo url('blogs/'.$blog->id); ?>" method="post">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <input type="hidden" name="_method" value="DELETE">
                                <button onclick="return confirm('are you sure !!')" class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>