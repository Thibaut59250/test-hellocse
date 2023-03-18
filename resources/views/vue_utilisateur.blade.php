@extends('template')

@section('contenu')
    <h1 class="titre">Profiles de stars !</h1><br>

    <card_star stars="{{ json_encode($stars) }}"/>
@endsection
