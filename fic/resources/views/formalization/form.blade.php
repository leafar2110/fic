@extends('./template')

@section('content')

  <section class="">
    <div class="container-fluid h-custom">
      <div class="d-flex justify-content-center align-items-center h-100">

        <form class="formwidth40 form-bg" method="POST" action="{{ route('results') }}">
            @csrf
          <p class="h3">Buscar lista de documentos segun: </p>
          <br>

          <div class="form-outline mb-4 col-12">
            <label class="form-label" for="form3Example4">Rubro</label>
            <select name="category" class="form-select" aria-label="Default select example">
              <option value="{{ old('category', '') }}" selected>Seleccione el rubro</option>
                @foreach( $categories as $category )
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-outline mb-4 col-12">
            <label class="form-label" for="form3Example4">Comuna</label>
            <select name="zone" class="form-select" aria-label="Default select example">
              <option value="{{ old('zone','') }}" selected>Seleccione la comuna</option>
                @foreach( $zones as $zone )
                    <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                @endforeach
            </select>
          </div>
          <!-- Submit button -->
          @auth
            <button class="btn btn-primary btn-block mb-4 btn-width100 btn-primary-cs">Buscar</button>
          @else
            <button class="btn btn-primary btn-block mb-4 btn-width100 btn-primary-cs">Inicia sesion para continuar</button>
          @endif

        </form>
      </div>
    </div>

  </section>
@endsection
