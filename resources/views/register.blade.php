<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <style>
        .parsley-errors-list li {
            list-style: none;
            color: red;
        }
    </style>
</head>
<body>
    <section style="padding-top:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Register
                        </div>
                        <div class="card-body">
                            <form action="{{route('auth.registersubmit')}}" method="POST" id="registerForm">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[5,15]" data-parsley-trigger="keyup" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required data-parsley-type="email" data-parsley-trigger="keyup" />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required data-parsley-length="[6,12]" data-parsley-trigger="keyup" />
                                </div>
                                <div class="form-group">
                                    <label for="cpassword">Confirm password</label>
                                    <input type="password" name="cpassword" class="form-control" id="cpassword" required data-parsley-equalto="#password" data-parsley-trigger="keyup" />
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" required data-parsley-pattern="[0-9]+$" data-parsley-length="[10,14]" placeholder="+52-5555555555" data-parsley-trigger="keyup" />
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function(){
            $("#registerForm").parsley();
        });
    </script>
</body>
</html>