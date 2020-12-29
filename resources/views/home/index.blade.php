
 @section('style')
 https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css
 @endsection

 @section('script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
   function previewFile(input){
            var file=$("input[type=file]").get(0).files[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
</script>
 @endsection

<x-app-layout>
    <x-slot name="header">
       <h6>Sado en Btc {{ Auth::user()->btc }}</h6>
        
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Galeria de imagenes</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control">
                                <label class="mt-2" for="description">Description</label>
                                <textarea name="description" id="" cols="43" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">Choose Profile Image</label>
                                <input type="file" name="file" class="form-control"  onchange="previewFile(this)" />
                                <img alt="profile image" id="previewImg" style="max-width:130px; margin-top:20px;">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

