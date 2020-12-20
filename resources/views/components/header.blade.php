<div>
   <h1> This is Header Component</h1>
   <h3>hello {{$name}}</h3>
   <h3>Estas Frutas:</h3>
   <ul>
       @foreach ($fruits as $fruit)
           <li>{{$fruit}}</li>
       @endforeach
   </ul>
</div>