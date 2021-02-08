<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba de javascrip</title>
    <link rel="stylesheet" href="{{asset('css/prueba/prueba1.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mt-5">
                    Pueba de capacidad 
                </h3>
            </div>
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">
                            Valor basado en un Bitcoin
                        </h5>
                    </div>
                    <div class="card-boy contenedor-cards__body ">
                        <div class="col-md-5 primera">
                            <h6 class="mt-5">Precio en Pesos: <span id="mxn"> </span></h6>
                            <h6 class="mt-5">precio en Etereum: <span id="eth"> </span></h6>
                            <h6 class="mt-5">Precio en Dolares: <span id="usd"> </span></h6>

                            <select class="form-select selector1" aria-label="Default select example" id="selector1" onchange="seleccionCoin()">
                                
                                <option value="BTC">Bitcoin</option>
                                <option value="ETH">Ethereum</option>
                                <option value="MXN">Pesos</option>
                                <option value="USD">Pesos</option>
                              </select>
                        </div>
                       <div class="col-md-5 segunda">
                        <h6 class="mt-5">Precio en Pesos: <span id="mxn1"> </span></h6>
                        <h6 class="mt-5">precio en Etereum: <span id="eth1"> </span></h6>
                        <h6 class="mt-5">Precio en Dolares: <span id="btc1"> </span></h6>
                        <select class="form-select selector2" aria-label="Default select example" id="selector2">
                            
                                <option value="BTC">Bitcoin</option>
                                <option value="ETH">Ethereum</option>
                                <option value="MXN">Pesos</option>
                                <option value="USD">Pesos</option>
                          </select>
                    </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  

    <script src="{{asset('js/prueba/prueba1.js')}}"></script>
</body>
</html>