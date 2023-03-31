@extends('./template')

@section('content')

<h1>result</h1>
@foreach( $result as $category )
    <li>{{ $category->name }}</li>
@endforeach

@endsection
