@extends('layouts.app')

@section('title','products')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <h1>Quản Lý Sinh Viên</h1>
  <table class="table table-bordered">
    <thead class="table table-dark table-striped">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Full Name</th>
        <th scope="col">Update</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    
    <tbody>
      @if (count($students) <= 0)
      @else
          @foreach($students as $student)
              <tr>
                  <th>{{$student->id}}</th>
                  <th>{{$student->fullname}}</th>
                  <th><a href="/edit-student/{{$student->id}}"><i class="fa-solid fa-pen-to-square"></i></a></th>
                  <th><a href="/student/{{$student->id}}"><i class="fa-solid fa-circle-info"></i></a></th>
              </tr>
            
          @endforeach  
      @endif
    </tbody>
  </table>
  <a href="{{ url('student/create') }}" class="btn btn-primary">Create</a>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
@endsection