<div class="row">
    @foreach($carros as $carro)
      <div class="col s12 m{{$tamanho}}">
        @component('componentes.cartao', [
            'titulo'=>$carro->titulo,
            'descricao'=>$carro->descricao,
            'imagem'=>$carro->imagem,
            'valor'=>$carro->valor,
            'url'=>$carro->url,
        ]) 
         
        @endcomponent
      </div>
    @endforeach
</div>