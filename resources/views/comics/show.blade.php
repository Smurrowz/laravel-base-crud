@extends('layout.app')
@section('content')
  <div class="section">
    <img class="comic-img" src="{{$comic['thumb']}}" alt="">
    <a class="go-back" href="{{route('comics.index')}}">indietro</a>
    <a class="edit-button" href="{{route('comics.edit',$comic)}}">edita</a>
    <form class="delete-form" action="{{route('comics.destroy',$comic)}}" method="POST">
        @csrf
        @method('DELETE')
        <input class="delete-button" type="submit" value="Elimina">
    </form>
    
    </div>
    <div class="details-cont">
        <div class="details-left">
            <h1> {{$comic['title']}}</h1>
            <div class="bar">
                <div class="comic-price"> 
                    <p><span class="green-text"> U.S. Price:</span> <strong> {{$comic['price']}} </strong></p>
                    <p><span class="green-text"> AVAILABLE</span></p>
                </div>
                <div class="comic-check"> 
                    <p><strong>Check Availability &#9660;</strong></p>
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="details-img">
            <img src="{{ asset('/img/adv.jpg') }}" alt="#">
        </div>
        
    </div>
  </div>
  
@endsection