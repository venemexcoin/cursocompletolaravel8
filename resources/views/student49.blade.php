<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
</head>
<body>


    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            students <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#studentModal">Add New Student</a>
                        </div>
                        <div class="card-body">
                            <table class="table" id="studenTable">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr id="sid{{$student->id}}">
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="editStudent({{$student->id}})" class="btn btn-info">Edit</a>
                                            <a href="javascript:void(0)" onclick="deleteStudent({{$student->id}})" class="btn btn-danger">Delete</a>
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

   
  
  <!-- add Student Modal -->
  <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" id="studentForm">
              @csrf
              <div class="form-group">
                  <label for="firtname">First Name</label>
                  <input type="text" class="form-control" id="firstname" />
              </div>
              <div class="form-group">
                <label for="lastname">LastName</label>
                <input type="text" class="form-control" id="lastname" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" />
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

   <!-- Edit Student Modal -->
   <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" id="studentEditForm">
              @csrf
              <input type="hidden" id="id" name="id" />
              <div class="form-group">
                  <label for="firtname">First Name</label>
                  <input type="text" class="form-control" id="firstname2" />
              </div>
              <div class="form-group">
                <label for="lastname">LastName</label>
                <input type="text" class="form-control" id="lastname2" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email2" />
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone2" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
      $("#studentForm").submit(function(e){
        e.preventDefault();

        let firstname = $("#firstname").val();
        let lastname = $("#lastname").val();
        let email = $("#email").val();
        let phone = $("#phone").val();
        let _token = $("input[name=_token").val();

        $.ajax({
            url: "{{route('student.add')}}",
            type:"POST",
            data:{
                firstname:firstname,
                lastname:lastname,
                email:email,
                phone:phone,
                _token:_token
            },
            success:function(response)
            {
                if(response)
                {
                    $("#studenTable tbody").prepend('<tr><td>'+ response.firstname +'</td><td>'+ response.lastname +'</td><td>'+ response.email +'</td><td>'+ response.phone +'</td></tr>');
                    $("#studentForm")[0].reset();
                    $("#studentModal").modal('hide');
                }
            }
        });
      });
  </script>
  <script>
      function editStudent(id)
      {
          $.get('/student49/'+id,function(student){
              $("#id").val(student.id);
              $("#firstname2").val(student.firstname);
              $("#lastname2").val(student.lastname);
              $("#email2").val(student.email);
              $("#phone2").val(student.phone);
              $("#studentEditModal").modal('toggle');
          })
      }

      $("#studentEditForm").submit(function(e) {
          e.preventDefault();

        let id = $("#id").val();
        let firstname = $("#firstname2").val();
        let lastname = $("#lastname2").val();
        let email = $("#email2").val();
        let phone = $("#phone2").val();
        let _token = $("input[name=_token").val();

        $.ajax({
            url:"{{route('student.update')}}",
            type:"PUT",
            data:{
                id:id,
                firstname:firstname,
                lastname:lastname,
                email:email,
                phone:phone,
                _token:_token
            },
            success:function(response){
                $('#sid'+ response.id + 'td:nth-child(1)').text(response.firstname);
                $('#sid'+ response.id + 'td:nth-child(2)').text(response.lastname);
                $('#sid'+ response.id + 'td:nth-child(3)').text(response.email);
                $('#sid'+ response.id + 'td:nth-child(4)').text(response.phone);
                $("#studentEditModal").modal('toggle');
                $("#studentEditForm")[0].reset();
                
            }
        });

      });
  </script>

  <script>
      function deleteStudent(id)
      {
        if(confirm("Do you realy want to delete this record?"))
        {
            $.ajax({
                url:'/student49s/'+id,
                type:'DELETE',
                data: {
                    _token: $("input[name=_token]").val()
                },
                success:function(response)
                {
                    $("#sid"+id).remove();
                }

            });
        }
      }
  </script>
    
</body>
</html>