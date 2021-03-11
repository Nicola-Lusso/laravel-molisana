@extends('layouts.app')

@section('title', $prodotto ['titolo'])

@section('content')
    <div class="container">
        <h2>{{ $prodotto ['titolo'] }}</h2>
    </div>
    <div class="scheda-prodotto">
        <img src="{{ $prodotto ['src-h'] }}" alt="">
        <img src="{{ $prodotto ['src-p'] }}" alt="">
        <div class="descrizione">
            <p>{{$prodotto['descrizione'] }}</p>
            <div class="tipo">
                <i class="fas fa-info"></i>
                <p>{{ $prodotto['tipo'] }}</p>
            </div>
            <div class="cottura">
                <i class="far fa-clock"></i>
                <p>{{ $prodotto['cottura'] }}</p>
            </div>
            <div class="peso">
                <i class="fas fa-balance-scale-right"></i>
                <p>{{ $prodotto['peso'] }}</p>
            </div>
        
          </div>
        
    </div>
@endsection