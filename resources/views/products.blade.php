@extends('layouts.app')

@section('title', 'prodotti')

@section('content')

<div class="box-container">
    @foreach ($formati as $key => $formato)
        <div class="box">
            <img src="{{ $formato['src'] }}" alt="">
            <div class="overlay">
                <a href=" {{ route('pagina-dettagli', ['id' => $key]) }} "> {{$formato['titolo']}} </a>
            </div>
            {{-- <p class="descrizione">{{ $formato['titolo'] }} - {{ $formato['tipo'] }}</p> --}}
        </div>
    @endforeach
</div>
        
    
@endsection