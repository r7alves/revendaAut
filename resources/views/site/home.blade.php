@extends('layouts.app')

@section('content')

@component('componentes.slide', ['lista'=>$slides])
@endcomponent
<div class="container">
    @component('componentes.lista_cartoes', 
        ['carros'=>$carros,'tamanho'=>'3'])
    @endcomponent
</div>
@endsection
