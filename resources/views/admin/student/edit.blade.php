{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Student</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
      <h1 class="mt-5">EDIT MAHASISWA</h1>
        <form action="{{route('update-student', $student->id)}}" method="POST">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label for="exampleInputnidn">Nim</label>
              <input value="{{$student->nim}}" type="text" name="nim"class="form-control" id="exampleInputnim" placeholder="enter your nim">
              
            </div>
            <div class="form-group">
              <label for="exampleInputname">Name</label>
              <input value="{{$student->name}}" type="text" name="name" class="form-control" id="exampleInputname" placeholder="enter your name">
            </div>

            <div class="form-group">
              <label for="exampleInputaddress">Major</label>
              <input value="{{$student->major}}" type="text" name="major" class="form-control" id="exampleInputmajor" placeholder="enter your Major">
            </div>
            <div class="form-group">
              <label for="exampleInputaddress">Phone</label>
              <input value="{{$student->phone}}" type="text" name="phone" class="form-control" id="exampleInputphone" placeholder="enter your phone">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
    </div>
</body>
</html> --}}

@extends('backend.master')

@section('content')
<div class="card border">
  <div class="card-body">
    <h1>EDIT MAHASISWA</h1>
        <form action="{{route('update-student', $student->id)}}" method="POST">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label for="exampleInputnidn">Nim</label>
              <input value="{{$student->nim}}" type="text" name="nim"class="form-control" id="exampleInputnim" placeholder="enter your nim">
              
            </div>
            <div class="form-group">
              <label for="exampleInputname">Name</label>
              <input value="{{$student->name}}" type="text" name="name" class="form-control" id="exampleInputname" placeholder="enter your name">
            </div>

            <div class="form-group">
              <label for="exampleInputaddress">Major</label>
              <input value="{{$student->major}}" type="text" name="major" class="form-control" id="exampleInputmajor" placeholder="enter your Major">
            </div>
            <div class="form-group">
              <label for="exampleInputaddress">Phone</label>
              <input value="{{$student->phone}}" type="text" name="phone" class="form-control" id="exampleInputphone" placeholder="enter your phone">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
             <a class="btn btn-primary"  href="{{route('index-student')}}" >
          Kembali
        </a>
          </form>
  </div>
</div>
@endsection