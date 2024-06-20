<?php

use Illuminate\Support\Facades\Route;

//Route::get('/home', function () {
//    return view('welcome');
//});

//Route::view('/jogos','jogos');

//Route::view('/gustavo','jogos');
// gustavo no caso se refere ao  nome da pagina, jogos se refere ao view

//Route::get('/jogos', function(){
//return "Curso Laravel";
//});
// foi enviado uma string para o jogos.blade.php o texto curso laravel

//Route::view('/jogos', 'jogos', ['name' => 'GTA']);
// GTA no caso é um paametro estatico que foi definida no codigo

//Route::get('/jogos/{name}', function($name){
//return view('jogos', ['nomejogo' => $name]);
//});
// serve para parametros dinamicos, o que digitar via web ele aparece

//Route::get('/jogos/{name?}', function($name = null){
  //  return view('jogos', ['nomejogo' => $name]);
    //});
    // serve para parametros dinamicos, o que digitar via web ele aparece
    // para não ser obrigatorio e o null servem para que poss iniciar ser pedir paramentro e nao dar erro

   // Route::get('/jogos/{name?}', function($name = null){
     //   return view('jogos', ['nomejogo' => $name]);
       // })-> where('name', '[A-Za-z]+');
    
        //onde 'where' variavel name  sugere que onde ele tenha lentras de A a Z maiusculucas o minuscla ele passe o parametro

        //Route::get('/jogos/{id?}', function($id = null){
          //  return view('jogos', ['idjogo' => $id]);
            //})-> where('id', '[0-9]+');
            // onde os paraetro via web seja de numeros

            
       // Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
         //   return view('jogos', ['idjogo' => $id, 'nomejogo' =>$name]);
           // })-> where(['id' =>'[0-9]+', 'name' => '[a-z]+']);
            //para ter paramentros de letras e numeros

            Route::get('/jogos', function(){
                return view ('jogos');
            });

            Route::get('/home', function (){
                return view ('welcome');
            })->name ('home-index');

            Route::fallback(function(){
            return "Essa pagina não exite";
            });