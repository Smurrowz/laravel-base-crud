@extends ('layout.app')

@section('content')
    <h1 class="create-title">Crea un nuovo comic:</h1>
    <form method="POST" action="{{route('comics.store')}}">
        @csrf
        <p>
          <label for="title">  Titolo: </label>
          <input type="text" id="title" name="title" placeholder="nome del comic">
        </p>
        <p>
          <label for="type">  Tipo:  </label>
          <input type="text" id="type" name="type" placeholder="tipo del comic">
        </p>
        <p>
          <label for="thumb">Copertina: </label>
          <input type="url" id="thumb" name="thumb"
            placeholder="link alla thumbnail">
        </p>
        <p>
          <label for="description">Descrizione: </label>
          <textarea id="description" name="description"
            placeholder="descrizione del comic"></textarea>
        </p>
        <p>
          <label for="price">Prezzo: </label>
          <input type="number" min="0.00" max="30000.00" step="0.01" id="price" name="price"
            placeholder="prezzo del comic">
        </p>
        <p>
          <label for="series">Serie: </label>
          <input type="text" id="series" name="series" placeholder="serie">
        </p>
        <p>
          <label for="sale_date">Data: </label>
          <input type="date" id="sale_date" name="sale_date">
        </p>
        
        <button type="submit">Crea</button>

    </form>
@endsection
