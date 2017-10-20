@extends('layouts.app')
@section('content')
<div class="container">
    <div id="destaques" class="row section scrollspy">
        <div class="col s12 m6">
            @component('componentes.slide',['lista'=>$galeria])
            @endcomponent
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-stacked">
                    <div class="card-content">
                        <h2 class="header">Empresa</h2>
                        <blockquote>
                            Descrição da Empresa
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet ac ligula id bibendum. Duis fringilla gravida efficitur. 
                        Suspendisse ut tempor augue. Praesent nibh mi, fringilla sit amet ligula eget, euismod vehicula mauris. Pellentesque non orci felis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection