<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


  <title>Nuovo Portfolio </title>
</head>
<body class="bg-body-secondary">
  <div class="container">
  <h1>Nuovo Portfolio </h1>

  @if ($errors->any()) 
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error) 
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

  <form action="{{route('admin.posts.store')}} " method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titolo Portfolio</label>
    <input type="text" class="form-control" name="title" value="{{old('title')}}" required  >
     

   </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contenuto</label>
    <textarea type="text"  class="form-control" name="content"value="{{old('content')}}" ></textarea> </textarea>
  </div>


   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</body>
</html>