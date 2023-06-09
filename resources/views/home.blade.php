@extends('app')
@section('title', 'Home')

@section('siderbar')
    @parent
    <p>Este es un codigo en el master siderbar.</p>

@endsection
@section('content')
    <p>Esto es parte del cuerpo del contenido   </p>
@endsection
