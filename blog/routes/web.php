<?php


/*Route::get('fotos/{numero?}',function($numero = 'sin número'){
    return 'Estás en la galería de fotos: '.$numero;
})->where('numero','[0-9]+');
Route::view('galeria','fotos',['numero'=>125]);
Route::get('nosotros',function(){
    $equipo = ['Ignacio','Juanito','Pedrito'];
    return view('nosotros',compact($equipo));
});
Route::view('nosotros','nosotros')->name('nosotros');
Route::view('fotos','fotos')->name('foto');
Route::view('blog','blog')->name('blog');
Route::get('nosotros/{nombre?}',function($nombre=null){
    $equipo = ['Ignacio','Juanito','Pedrito'];
    return view('nosotros',compact('equipo','nombre'));
})->name('nosotros');
*/
Route::get('/','PagesController@inicio')->name('inicio');
Route::post('/','PagesController@crear')->name('notas.crear');
Route::put('/editar{id}','PagesController@update')->name('notas.update');
Route::get('/editar/{id}','PagesController@editar')->name('notas.editar');
Route::get('/detalle/{id}','PagesController@detalle')->name('notas.detalle');
Route::get('nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');
Route::get('blog','PagesController@blog')->name('blog');
Route::get('fotos','PagesController@fotos')->name('foto');
