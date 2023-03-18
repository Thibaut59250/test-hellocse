@extends('template')

@section('contenu')
    <h1 class="titre">Stars !</h1><br>

    <card_star stars="{{ json_encode($stars) }}"/>
@endsection
