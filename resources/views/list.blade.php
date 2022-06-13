@extends('main')
@section('container')

<style>
  body{
      font-family:sans-serif;
    color:black;
  }
  .main{
    padding:50px;
  }
 .cards {
   display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(6, minmax(100px, 1fr));
  
  
}

.card {
  margin: 20px;
  padding: 20px;
  width: 15em;
  height: 15em;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
  background-color: 	white;
  border:2px solid rgba(0, 0)
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}


</style>



 
  <div class="main">
    <div class="cards">
     @foreach($hotels as $hotel)
    <div class="card ">
    
      <a href="/detail/{{ $hotel->id }}" alt=""><img  width="200em"height="100em" src="{{ asset('storage/'.$hotel->image)  }}" alt=""></a><br>
      <h3>{{ $hotel->name }}</h3>
      <h5>{{ $hotel->location }}</h5>
      <h5>Rp{{ $hotel->price }}</h5>
    
    
  
    </div>
    @endforeach

    </div>
</div>
    



  