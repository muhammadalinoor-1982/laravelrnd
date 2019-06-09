@csrf
<input value="@isset($blog){{$blog->title}}@endisset" required class="form-control" type="text" name="title" placeholder="Blog Title">
<textarea required class="form-control" name="details" id="" cols="30" rows="10">@isset($blog){{$blog->details}}@endisset</textarea>