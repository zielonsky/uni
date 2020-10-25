<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WsbSite;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController1;

// use $namespace = 'App\Http\Controllers';

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
    return view('welcome',['name' => 'Piotr', 'surname' => 'Zieliński', 'city' => 'Poznań',
    'about' => 'Strona WSB Piotra', 'home' => 'Strona domowa', 'contact' => 'piotr@wsb.ponan.pl']);
});

// Route::get('/wsb', function () {
//     return view('wsb');
// });

// Route::get('/wsb', function () {
//     return 'wsb';
// });

// Route::get('/wsb', function () {
//     return ['name' => 'WSB' , 'city' => 'Poznań'];
// });

// Route::get('/wsb', function () {
//     return view('wsb',['name' => 'Anna', 'surname' => 'Nowak']);
// });

Route::get('/pages/{x}', function ($x) {
    $pages = [
        'about' => "Strona WSB Piotra",
        'home' => "Strona domowa",
        'contact' => "piotr@wsb.ponan.pl"
    ];

    return $pages[$x];
});

// Route::get('/address/{city}/{street}/{zipCode}',
//     function (string $city, String $street, int $zipCode) {
//         $zipCode = substr($zipCode,0,2).'-'.substr($zipCode,2,3);
//     echo <<<ADDRESS
//         Miasto: $city<br>
//         Ulica: $street<br>
//         Kod pocztowy: $zipCode<hr>
//     ADDRESS;
// });

Route::get('/address/{city?}/{street?}/{zipCode?}', function (
    String $city = "Brak danych",
    String $street = "Brak danych",
    Int $zipCode = NULL) {
    if  (is_null($zipCode)){
        $zipCode = "brak";
    }else{
        $zipCode = substr($zipCode,0,2).'-'.substr($zipCode,2,3);
    }
    echo <<<ADDRESS
        Miasto: $city<br>
        Ulica: $street<br>
        Kod pocztowy: $zipCode<hr>
    ADDRESS;
})->name('address');

Route::redirect('/adres/{city?}/{street?}/{zipCode?}','/address/{city?}/{street?}/{zipCode?}');

Route::prefix('admin')->group(function(){
    Route::get('/home/{name}', function (string $name) {
        echo "Witaj $name na stronie administracyjnej";
    });

    Route::get('/users', function () {
        echo "<h3>Użytkownicy systemu</h3>";
    });
});

Route::redirect('/admin/{name}','/admin/home/{name}');

Route::get('/user/{name}/{age?}', function(string $name, int $age = null){
//    echo "Strona testowa użytkownika $name";
    echo "<br>";
    echo "Imię: $name<br>";
    if ($age != null){
        echo "Wiek: $age";
    }
})->where(['name' => '[A-Za-z]+']);

Route::get('/wsb', function () {
    return view('wsb',['name' => 'Anna', 'surname' => 'Nowak', 'city' => 'Poznań']);
});

Route::get('/loop', function () {
//    return view('loop');
    $car = [
        ['mark' => 'Ford','model' => 'Focus', 'color' => 'srebrny'],
        ['mark' => 'Fiat','model' => '126p', 'color' => 'biały'],
        ['mark' => 'Ferarrri','model' => 'F430', 'color' => 'czerwony'],
    ];

    return view('loop',['car' => $car]);
});

Route::get('/blade', function () {
    return view('szablon');
});

//Route::get('/site', 'App\Http\Controllers\WsbSite@index');
Route::get('site/{website}', [WsbSite::class, 'index']);

Route::get('drives/{page}', [PageController::class, 'show']);

Route::get('/userform', function () {
    return view('userform');
});
Route::post('usercontroller', [UserController::class, 'account']);

//wyświetlić na stronie wpisane dane

Route::view('/user', 'user');
Route::post('usercontroller1', [UserController1::class, 'index']);
