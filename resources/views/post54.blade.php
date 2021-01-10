<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infinite ScrollPagination</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Infinite Scroll Pagination</h2>
                </div>
                <div class="col-md-12" id="post-data">
                    @include('data')
                </div>
            </div>
        </div>
    </section>
    <div class="ajax-load text-cente" style="display:none;">
        <p><img src="{{asset('images/loader.gif')}}" alt=""> Loading More Post</p>
    </div>

    <script>
        function loadMoreData(page)
        {
            $.ajax({
                url:'?page=' + page,
                type:'get',
                beforeSend: function()
                {
                    $(".ajax-load").show();
                }
            })
            .done(function(data){
                if(data.thml == " "){
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data.thml);
            })
            .fail(function(jqXHR,ajaxOptions,thrownError){
                alert("Server not reponding...");
            });
        }

        var page = 1;
            $(window).scroll(function(){
                if($(window).scrollTop() + $(window).height() >= $(document).height()){
                    page++;
                    loadMoreData(page);
                }
            });
    </script>
</body>
</html>