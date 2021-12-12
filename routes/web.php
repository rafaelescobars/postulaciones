<?php

use Illuminate\Support\Facades\Route;
    //Agregado
    use App\Models\Postulante;

    use Illuminate\Http\Request;
    //

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
    return view('postulacion.index');
});

Route::resource('postulantes', 'App\Http\Controllers\PostulanteController');

// Route::resource('form', 'resources\views\postulacion\form');

Route::get('form', function () {
    return view('postulacion.form');
});

Route::get('list', function () {
    $postulantes=Postulante::all();
    return view('postulacion.list')->with('postulantes',$postulantes);
});

Route::get('list/{id}/edit', function ($id) {
    $postulante=Postulante::find($id);
    return view('postulacion.edit')->with('postulante',$postulante);
});

Route::get('list/{id}/delete', function ($id) {
    $postulantes=Postulante::all();
    $postulante=Postulante::find($id);
    $postulante->delete();
    return redirect('list')->with('postulantes',$postulantes);
});


Route::post('form',function(Request $request){
    
    $postulantes= new Postulante();
    
    $postulantes->nombre=$request->get('nombre');
    $postulantes->edad=$request->get('edad');
    
    try{
        $arrayToString=implode(' | ',$request->get('preferencias'));
        $postulantes->preferencias=$arrayToString;
    } catch (Throwable $e){
        $postulantes->preferencias=null;
    };
   

    $postulantes->save();

    return redirect('list');
});

Route::put('list/{id}/edit', function (Request $request, $id) {
    
    $postulante=Postulante::find($id);
    
    $postulante->nombre=$request->get('nombre');
    $postulante->edad=$request->get('edad');
    
    try{
        $arrayToString=implode(' | ',$request->get('preferencias'));
        $postulante->preferencias=$arrayToString;
    } catch (Throwable $e){
        $postulante->preferencias=null;
    };

    $postulante->save();

    return redirect('list');
});