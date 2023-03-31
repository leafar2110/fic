@extends('./template')

@section('content')

<h1>form</h1>

<form method="POST" action="{{ route('results') }}">
    @csrf
    <select name="category" >
        <option value="">Seleccione rubro</option>
        @foreach( $categories as $category )
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <select name="zone" id="">
        <option value="">Seleccione comuna</option>
        @foreach( $zones as $zone )
            <option value="{{ $zone->id }}">{{ $zone->name }}</option>
        @endforeach
    </select>
    <button>Enviar</button>
</form>

@endsection
