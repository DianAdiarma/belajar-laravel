{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Lecturer</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
      <h1 class="mt-5">TAMBAH DOSEN</h1>
        <form action="{{route('store-lecturer')}}" method="POST">
          @csrf
            <div class="form-group">
              <label for="exampleInputnidn">Nidn</label>
              <input type="text" name="nidn"class="form-control" id="exampleInputnidn" placeholder="enter your nidn">
              
            </div>
            <div class="form-group">
              <label for="exampleInputname">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputname" placeholder="enter your name">
            </div>

            <div class="form-group">
              <label for="exampleInputaddress">Address</label>
              <input type="text" name="address" class="form-control" id="exampleInputaddress" placeholder="enter your Address">
            </div>

            <div class="form-group">
              <label for="exampleInputphone">Phone</label>
              <input type="text" name="phone" class="form-control" id="exampleInputphone" placeholder="enter your Phone">
            </div>
           
            <button type="submit" class="btn btn-primary">Create</button>
             <a class="btn btn-primary"  href="{{route('index-lecturer')}}" >
          Kembali
        </a>
          </form>
    </div>
</body>
</html> --}}

@extends('backend.master')

@section('content')
<div class="card border">
  <div class="card-body">
      <h1>TAMBAH MATA KULIAH</h1>
        <form action="{{route('store-subject')}}" method="POST">
          @csrf
          <div class="form-group">
              <select class="custom-select" id="inputGroupSelect01" name="lecturer_id">
                    <option selected>Nama Dosen</option>
                    <option label="Pilih Dosen..."></option>
                    @foreach ($lecturers as $lecturer)
                        <option value="{{$lecturer->id}}">{{$lecturer->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputcode">Kode Mata Kuliah</label>
              <input type="text" name="code"class="form-control" id="exampleInputcode" placeholder="enter your Kode Mata Kuliah">
              
            </div>
            <div class="form-group">
              <label for="exampleInputname">Name Mata Kuliah</label>
              <input type="text" name="name" class="form-control" id="exampleInputname" placeholder="enter your Nama Mata Kuliah">
            </div>

            
           
            <button type="submit" class="btn btn-primary">Create</button>
             {{-- <a class="btn btn-primary"  href="{{route('index-lecturer')}}" >
          Kembali
        </a> --}}
        </form>
  </div>
</div>
@endsection