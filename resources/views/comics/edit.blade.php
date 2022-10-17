@extends ('layout.app')

@section('content')
    <h1 class="create-title">Edita un comic:</h1>
    <form class="create-form" action="{{ route('comics.update', $comic)}} " method="POST">
      
        @csrf 
        @method('PUT')

        <p>
          <label for="title">  Titolo: </label>
          <input type="text" id="title" name="title" value="{{ old('title', $comic->title) }}" placeholder="nome del comic" @error('title') is-invalid @enderror >
          @error('title')
          <div class="alert">
            {{$message}}
          </div>
          @enderror
        </p>
        <p>
          <label for="thumb">Copertina: </label>
          <input type="url" id="thumb" value="{{ old('thumb', $comic->thumb) }}" name="thumb"
            placeholder="link alla thumbnail" @error('thumb') is-invalid @enderror>
            @error('thumb')
            <div class="alert">
              {{$message}}
            </div>
            @enderror
        </p>
        <p>
          <label for="description">Descrizione: </label>
          <textarea id="description" name="description"
            placeholder="descrizione del comic" @error('description') is-invalid @enderror>{{$comic->description}}</textarea>
            @error('description')
            <div class="alert">
              {{$message}}
            </div>
            @enderror
        </p>
        <p>
          <label for="price">Prezzo: </label>
          <input @error('price') is-invalid @enderror type="number" min="0.00" value="{{ old('price', $comic->price) }}" max="30000.00" step="0.01" id="price" name="price"
            placeholder="prezzo del comic">
            @error('price')
            <div class="alert">
              {{$message}}
            </div>
            @enderror
        </p>
        <p>
          <label for="series">Serie: </label>
          <input @error('series') is-invalid @enderror type="text" id="series" value="{{ old('series', $comic->series) }}" name="series" placeholder="serie">
          @error('series')
          <div class="alert">
            {{$message}}
          </div>
          @enderror
        </p>
        <p>
          <label for="sale_date">Data: </label>
          <input @error('sale_date') is-invalid @enderror type="date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" name="sale_date">
          @error('sale_date')
          <div class="alert">
            {{$message}}
          </div>
          @enderror
        </p>
        
        <button type="submit">Salva</button>

    </form>
@endsection