<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request){
       
        $cliente = new Cliente();
        $request->validate( $cliente->rules() , $cliente->feedbacks() );
        $cliente->fill($request->all());
        $cliente->save();

        return response()->json($cliente, 201);
    }

    public function update(Request $request){
        
        $cliente= Cliente::find($request->id);
        $request->validate( $cliente->rules() , $cliente->feedbacks() );
        
        $cliente->update($request->all());

        return response()->json($cliente, 200);
    }

    public function destroy($id)
    {   
        $cliente= Cliente::find($id);
        if($cliente === null){
            return response()->json(['error'=>'Cliente não deletado, pois não existe'], 404);
        }
        
        $cliente->delete();

        return response()->json( ['msg'=>'Cliente deletado com sucesso'] ,200);
    }

    public function show($id){
        $cliente = Cliente::find($id);
        if($cliente === null){
            return response()->json(['error'=>'Cliente não encontrado'], 404);
        }

        return response()->json($cliente, 200);
    }

    public function buscaPorPlaca($num){
        $clientes = Cliente::where('placa','like', '%'.$num)->get();
        if(count($clientes) < 1){

            return response()->json(['error'=>'Cliente não encontrado'], 404);
        }

        return response()->json($clientes, 200);
    }
    
    public function index(){
        $cliente = Cliente::all();
        return $cliente;
    }
    
}
