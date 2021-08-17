<?php

namespace App\Http\Controllers;
use App\Serie;

class SeriesController extends BaseController
{ 

    public function __construct(){

        $this->classe = Serie::class;
    }
    // public function index(){
        
    //     return Serie::all();
    // }

    // public function store(Request $request){
      
    //    return response()->json(
    //     //    Serie::create(['nome' => $request->nome]),
    //        Serie::create($request->all()), //só salva o que foi definido na classe serie protected $fillable = ['nome'];

    //         201
    //    );
    // }

    // // retornamos o status HTTP 204 ou 404?
    // // Buscar um conteúdo que não está no banco não deveria gerar um erro, 
    // // segundo o instrutor. Como não há o conteúdo buscado, o instrutor acredita que faz 
    // // mais sentido informar o status 204 (sem conteúdo).
    // public function show(int $id){ //lumen não da para fazer Serie $serie == usa show e não get
        
    //     $serie = Serie::find($id); //linha a mais por causa do lumen que não recebe Serie $serie
    //     if(is_null($serie)){
    //         return response()->json('', 204);
    //     }

    //     return response()->json($serie);

    // }

    // public function update(int $id, Request $request){

    //     $serie = Serie::find($id);
    //     if(is_null($serie)){
    //         return response()->json([
    //             'erro' => 'Recurso não encontrado'
    //         ], 404);
    //     }    
        
    //     $serie->fill($request->all());
    //     $serie->save();
    //     return $serie;
    // }

    // // destroy retorna um inteiro contendo quantos registros foram removidos com sucesso
    // public function destroy(int $id){
        
    //     $qtsRecursosRemovidos = Serie::destroy($id);
    //     if($qtsRecursosRemovidos === 0){
    //         return response()->json([
    //             'erro' => 'Recurso não encontrado'
    //         ], 404);
    //     }

    //     return response()->json('', 204);
    // }
}