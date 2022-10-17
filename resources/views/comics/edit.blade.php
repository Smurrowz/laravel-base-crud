@extends ('layout.app')

@section('content')
    <h1 class="create-title">Edita un comic:</h1>
    <form class="create-form" action="{{ route('comics.update', $comic)}} " method="POST">
      
        @csrf 
        @method('PUT')

        <p>
          <label for="title">  Titolo: </label>
          <input type="text" id="title" name="title" value="{{$comic->title }}" placeholder="nome del comic"  >
         
        </p>
        <p>
          <label for="type">  Tipo:  </label>
          <input type="text" id="type" value="{{ $comic->type }}" name="type" placeholder="tipo del comic">
         
        </p>
        <p>
          <label for="thumb">Copertina: </label>
          <input type="url" id="thumb" value="{{$comic->thumb }}" name="thumb"
            placeholder="link alla thumbnail" >
           
        </p>
        <p>
          <label for="description">Descrizione: </label>
          <textarea id="description" name="description"
            placeholder="descrizione del comic" >{{$comic->description}}</textarea>
          
        </p>
        <p>
          <label for="price">Prezzo: </label>
          <input  type="number" min="0.00" value="{{$comic->price }}" max="30000.00" step="0.01" id="price" name="price"
            placeholder="prezzo del comic">
           
        </p>
        <p>
          <label for="series">Serie: </label>
          <input  type="text" id="series" value="{{$comic->series }}" name="series" placeholder="serie">
        
        </p>
        <p>
          <label for="sale_date">Data: </label>
          <input  type="date" id="sale_date" value="{{$comic->sale_date }}" name="sale_date">
        </p>
        
        <button type="submit">Salva</button>

    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection