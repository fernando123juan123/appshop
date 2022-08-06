<?php

namespace App\Http\Controllers;

use App\Usuario as Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsuarioController extends Controller
{
    //
    public function inicio(){
        $data['listar_usuario'] = Usuario::all();
        return view('usuario/listar', $data);
    }
    public function nuevo_usuario(){
    	return view('usuario/nuevo_usuario');
    }
    public function guardar_nuevo_usuario(Request $request){
    	$user = new Usuario;
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->save();
    	/*$user=request()->except('_token');
    	Usuario::insert($user);*/
		// return back()->with('/');
		return redirect('/');
    }
    public function eliminar_usuario(Request  $request){
    	$user = Usuario::findOrFail($request->id);
    	$user->delete();
    	// return back()->with('/');
    	return redirect('/');
    }
    public function editar_usuario($id){
    	$data['obj'] = Usuario::findOrFail($id);
        return view('usuario/editar_usuario', $data);
    }
    public function guardar_editar_usuario(Request $request){
    	$user = Usuario::findOrFail($request->id);
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->update();
		// return back()->with('/');
		return redirect('/');
    }
}
