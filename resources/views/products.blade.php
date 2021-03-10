@extends('layouts.app')

@section('title', 'prodotti')

@section('content')

<div class="box-container">
    @foreach ($formati as $item)
        <div class="box">
            <img src="{{ $item['src'] }}" alt="">
            <p class="descrizione">{{ $item['titolo'] }} - {{ $item['tipo'] }}</p>
        </div>
    @endforeach
</div>
        
    
@endsection