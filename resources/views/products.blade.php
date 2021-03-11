@extends('layouts.app')

@section('title', 'sezioni prodotti')



@section('content')
<div class="box-container">
    @foreach ($tipi as $my_key => $tipo)
        <h2>{{$my_key}}</h2>
        <div class="scheda-prodotto">
            @foreach ($tipo as $key => $item)    
                <div class="box">
                    <img src="{{$item['src']}}" alt="{{$item['titolo']}}">
                    <div class="overlay">
                        <i class="fas fa-plus"></i>
                        <a href="{{route('pagina-dettagli', ['id' => $key])}}">{{$item['titolo']}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
        
    
@endsection