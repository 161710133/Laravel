<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return '<h1>Hallo</h1>'
    .'Selamat datang di web saya<br>'
    .'Laravel emang keren!.';
});
Route::get('/about/1', function () {
     return '<h1>Hallo ini about1 </h1>';
});
Route::get('/about/2', function () {
     return '<h1>Hallo ini about2</h1>';
});
Route::get('/about/3', function () {
     return '<h1>Hallo ini about3</h1>';
});
Route::get('/about/4', function () {
     return '<h1>Hallo ini about4</h1>';
});
Route::get('/about/5', function () {
     return '<h1>Hallo ini about5/h1>';
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/kantin/{id}/{minum}/{cemilan}', function ($a,$b,$c) {
    return 'Saya pesan '.$a.'<br>'
    		.'minumnya '.$b.'<br>'
    		.'cemilan '.$c.'<br>';
});
Route::get('/usr/{nama?}', function ($nama = 'Endang') {
    return 'Nama saya '.$nama;
});
?>

