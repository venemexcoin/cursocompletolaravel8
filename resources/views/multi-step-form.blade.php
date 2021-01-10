<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>multi Step Form</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/solar/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>
    <style>
        section{
            padding-top: 40px;
        }
        .form-section{
            padding-left:15px;
            display: none;
        }
        .form-section.current {
            display: inherit;
        }
        .btn-info,
        .btn-success {
            margin-top: 10px;
        }
        .parsley-errors-list{
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            color: red;
        }
    </style>

</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card mt-5">
                        <div class="card-header text-white bg-info">
                            <h5>Multi Step Form</h5>
                        </div>
                        <div class="card-body">
                            <form action="" class="contact-form">
                                @csrf
                                <div class="form-section current">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" class="form-control" required />

                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" class="form-control" required />
                                </div>

                                <div class="form-section">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="form-control" required />

                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" required />
                                </div>

                                <div class="form-section">
                                    <label for="msg">Message:</label>
                                    <textarea name="msg" class="form-control" required></textarea>
                                </div>

                                <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info float-left">Previous</button>
                                    <button type="button" class="previous btn btn-info float-right">Next</button>
                                    <button type="submit" class="previous btn btn-success float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        $(function(){
            var $sections = $('.form-section');
            

            function navigateTo(index){
                $sections.removeClass('current').eq(index)addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!alTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
            }
            function curIndex()
            {
                return $sections.index($sections.filter('.current'));
            }

            $('form-navigation .previous').click(function(){
                navigateTo(curIndex()-1);
            });

            $('.form-navigation .next').click(function(){
               $('contact-form')parsley().whenValidate({
                   group: 'block-' + curIndex()
               }).done(function(){
                   navigateTo(curIndex()+1);
               }); 
            });
            $sections.each(function(index,section){
                $(section).find(':input').attr('data-parsley-group','block'+index);
            });
            navigateTo(0);
        });
    </script>
</body>
</html>