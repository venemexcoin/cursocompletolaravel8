@include('headers')

<h2>Test Blade</h2>

@php
    $name = 'Jennifer';
    
    $fruits = array('Mango','Apple','Banana','Pineapple');

    $age = 12;
@endphp

<h2>{{$name}}</h2>

<h2>fruits</h2>

@foreach ($fruits as $fruit)
   <ul>
       <li>{{$fruit}}</li>
   </ul>
@endforeach

<br>

@for($i=1;$i<=10;$i++)
   {{$i}}. hola <br/>
@endfor

<br>
@if(count($fruits)==1)
   Fruta única
@elseif(count($fruits)>1)
   más que en Fruit
@else 
   No hay frutas 
@endif   

<br>

{{ $age >= 12 ? 'You are adult' : 'You are not adult'}}