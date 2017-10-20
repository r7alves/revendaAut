<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $slides = [
        (object)[
            'titulo' => 'Titulo Imagem',
            'descricao' => 'Titulo Descricao',
            'url' => '#link',
            'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        ]
    ];
    $carros = [
        (object)
        [
            'titulo'=>'Nome do Carro',
            'descricao'=>'Descricao do Carro',
            'valor'=>'R$50.000,00',
            'url'=>url('detalhe'),
            'imagem'=> 'https://www.ofertaschevrolet.com.br/Imagem/Veiculo/5S48VH_R7H_BRANCOSUMMIT.png',
        ],
        (object)
        [
            'titulo'=>'Nome do Carro',
            'descricao'=>'Descricao do Carro',
            'valor'=>'R$50.000,00',
            'url'=>url('detalhe'),
            'imagem'=> 'https://www.ofertaschevrolet.com.br/Imagem/Veiculo/5S48VH_R7H_BRANCOSUMMIT.png',
        ],
        (object)
        [
            'titulo'=>'Nome do Carro',
            'descricao'=>'Descricao do Carro',
            'valor'=>'R$50.000,00',
            'url'=>url('detalhe'),
            'imagem'=> 'https://www.ofertaschevrolet.com.br/Imagem/Veiculo/5S48VH_R7H_BRANCOSUMMIT.png',
        ],
        (object)
        [
            'titulo'=>'Nome do Carro',
            'descricao'=>'Descricao do Carro',
            'valor'=>'R$50.000,00',
            'url'=>url('detalhe'),
            'imagem'=> 'https://www.ofertaschevrolet.com.br/Imagem/Veiculo/5S48VH_R7H_BRANCOSUMMIT.png',
        ],
        (object)
        [
            'titulo'=>'Nome do Carro',
            'descricao'=>'Descricao do Carro',
            'valor'=>'R$50.000,00',
            'url'=>url('detalhe'),
            'imagem'=> 'https://www.ofertaschevrolet.com.br/Imagem/Veiculo/5S48VH_R7H_BRANCOSUMMIT.png',
        ],
        (object)
        [
            'titulo'=>'Nome do Carro',
            'descricao'=>'Descricao do Carro',
            'valor'=>'R$50.000,00',
            'url'=>url('detalhe'),
            'imagem'=> 'https://www.ofertaschevrolet.com.br/Imagem/Veiculo/5S48VH_R7H_BRANCOSUMMIT.png',
        ],
        (object)
        [
            'titulo'=>'Nome do Carro',
            'descricao'=>'Descricao do Carro',
            'valor'=>'R$50.000,00',
            'url'=>url('detalhe'),
            'imagem'=> 'https://www.ofertaschevrolet.com.br/Imagem/Veiculo/5S48VH_R7H_BRANCOSUMMIT.png',
        ],
        (object)
        [
            'titulo'=>'Nome do Carro',
            'descricao'=>'Descricao do Carro',
            'valor'=>'R$50.000,00',
            'url'=>url('detalhe'),
            'imagem'=> 'https://www.ofertaschevrolet.com.br/Imagem/Veiculo/5S48VH_R7H_BRANCOSUMMIT.png',
        ],


    ];
    return view('site.home', compact('slides', 'carros'));
});

Auth::routes();


///Criando regras para as rotas administrativas

Route::group(['middleware'=>'auth', 'prefix'=>'admin'], 
function()
{
    Route::get('/', 'Admin\AdminController@index');
    Route::resource('usuarios', 'Admin\UsuarioController');

    Route::get('usuarios/papel/{id}', 
        [
            'as'=>'usuarios.papel', 
            'uses'=>'Admin\UsuarioController@papel'
        ]
    );
    Route::post('usuarios/papel/{papel}',
        [
            'as'=>'usuarios.papel.store',
            'uses'=>'Admin\UsuarioController@papelStore'
        ]
    );
    Route::delete('usuarios/papel/{usuario}/{papel}',
        [
            'as'=>'usuarios.papel.destroy',
            'uses'=>'Admin\UsuarioController@papelDestroy'
        ]
    );
}    
);







Route::get('/contato', function(){
    $galeria = [
        (object)
        [
            'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        ]
    ];
    return view('site.contato', compact('galeria'));
});

Route::get('/sobre', function(){
    $galeria = [
        (object)
        [
            'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        ]
    ];
    return view('site.sobre', compact('galeria'));
});

Route::get('/detalhe', function(){
    $galeria = [
        (object)
        [
            'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        ]
    ];
    return view('site.detalhe', compact('galeria'));
});

Route::get('/addregistros', function () {
    
      $zero  = App\Categoria::create(['titulo'=>'Zero KM']);
      $semi  = App\Categoria::create(['titulo'=>'Seminovos']);
      $usado = App\Categoria::create(['titulo'=>'Usados']);
    
      $Honda = App\Marca::create(['titulo'=>'Honda','descricao'=>'Carros Honda']);
      $Chevrolet = App\Marca::create(['titulo'=>'Chevrolet','descricao'=>'Carros Chevrolet']);

      $Camaro = $Chevrolet->carros()->create(['titulo'=>'Camaro','descricao'=>'Automático e completo','ano'=>2017,'valor'=>150000.90]);
      $Civic = $Honda->carros()->create(['titulo'=>'Civic','descricao'=>'Automático e completo','ano'=>2017,'valor'=>80000]);
    
      $Camaro->categorias()->attach($usado);
      $Camaro->categorias()->attach($semi);
    
      $categorias = [
          new App\Categoria(['titulo'=>'Nacional']),
          new App\Categoria(['titulo'=>'Destaque']),
          new App\Categoria(['titulo'=>'Luxo'])
      ];
    
      $Civic->categorias()->saveMany($categorias);
      $Civic->categorias()->attach($semi);
    
      $usuario = App\User::find(1);
    
      $usuario->carros()->attach($Civic);
      $usuario->carros()->attach($Camaro);
    
      return "Registros criados";
    
});

Route::get('/teste', function (){
    //$carro = App\Carro::find(1);
    //dd($carro->titulo ,$carro->marca->titulo);
    $marca = App\Marca::find(1);
    dd($marca->titulo, $marca->carros);
});