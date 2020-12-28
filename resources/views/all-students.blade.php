<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all image</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/sandstone/bootstrap.min.css">
</head>
<body>
        <section style="padding-top: 60px;" />
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            @if(Session::has('student_deleted'))
                                <div class="alert alert-danger" role="alert">
                                    {{Session::get('student_deleted')}}
                                  </div>
                                @endif
                            <div class="card-header">
                                all Student
                            </div>
                            <div class="card-body">
                                <table class="table table-Striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Profile Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->name }}</td>
                                            <td><img src="{{asset('images')}}/{{ $student->profileimage }}" style="max-width:60px;"></td>
                                            <td>
                                                <a href="/edit-student/{{$student->id}}" class="btn btn-info">Edit</a>
                                                <a href="/delete-student/{{$student->id}}" class="btn btn-danger" >Borrar</a>
                                            </td>
                                        </tr>    
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>
</html>