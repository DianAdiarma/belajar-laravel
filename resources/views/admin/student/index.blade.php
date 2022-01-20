<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    <title>Tabel Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">TABEL MAHASISWA</h1>
        @if(session('status'))
       <script>
           Swal.fire({
               icon: 'success',
               text: "{{session('status')}}",
               title: 'Sukses',
                })
       </script>
        @endif
        <table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">No Hp</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($students as $key=> $student)
          
    <tr>
      <th scope="row">{{$key +1}}</th> 
      <td>{{ $student->nim}}</td>
      <td>{{ $student->name}}</td>
      <td>{{ $student->major}}</td>
      <td>{{ $student->phone}}</td>
    </tr>
     @endforeach
  </tbody>
</table>
    </div>
    
</body>
</html>