@extends('template')

@section('contenu')
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        {{ __('Se déconnecter') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Back-Office') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <card_star_edit stars="{{ json_encode($stars) }}" modifier="{{ URL::route("modifier") }}" supprimer="{{ URL::route("supprimer") }}" ajouter="{{ URL::route("ajouter") }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
