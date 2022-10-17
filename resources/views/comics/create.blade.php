@extends ('layout.app')

@section('content')
    <h1 class="create-title">Crea un nuovo comic:</h1>
    <form class="create-form" method="POST" action="{{route('comics.store')}}">
        @csrf
        <p>
          <label for="title">  Titolo: </label>
          <input type="text" id="title" value="{{ old('title') }}" name="title" placeholder="nome del comic">
        </p>
        <p>
          <label for="type">  Tipo:  </label>
          <input type="text" id="type" value="{{ old('type') }}" name="type" placeholder="tipo del comic">
        </p>
        <p>
          <label for="thumb">Copertina: </label>
          <input type="url" value="{{ old('thumb') }}" id="thumb" name="thumb"
            placeholder="link alla thumbnail">
        </p>
        <p>
          <label for="description">Descrizione: </label>
          <textarea id="description" name="description"
            placeholder="descrizione del comic"></textarea>
        </p>
        <p>
          <label for="price">Prezzo: </label>
          <input type="number" min="0.00" value="{{ old('price') }}" max="30000.00" step="0.01" id="price" name="price"
            placeholder="prezzo del comic">
        </p>
        <p>
          <label for="series">Serie: </label>
          <input type="text" id="series" value="{{ old('series') }}" name="series" placeholder="serie">
        </p>
        <p>
          <label for="sale_date">Data: </label>
          <input type="date" value="{{ old('sale_date') }}" id="sale_date" name="sale_date">
        </p>
        
        <button type="submit">Crea</button>

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
