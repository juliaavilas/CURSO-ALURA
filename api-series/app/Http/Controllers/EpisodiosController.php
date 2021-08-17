<?php

namespace App\Http\Controllers;
use App\Episodio;

class EpisodiosController extends BaseController
{ 

    public function __construct(){

        $this->classe = Episodio::class;
    }

    public function buscaPorSerie(int $serieId){
        
        $episodios = Episodio::query()
        ->where('serie_id', $serieId)
        ->paginate();
        //->get();

        return $episodios;
    }
    // public function index(){
        
    //     return Episodio::all();
    // }

    // public function store(Request $request){
      
    //    return response()->json(
    //     Episodio::create($request->all()),
    //         201
    //    );
    // }


    // public function show(int $id){ 
        
    //     $serie = Episodio::find($id); 
    //     if(is_null($serie)){
    //         return response()->json('', 204);
    //     }

    //     return response()->json($serie);

    // }

    // public function update(int $id, Request $request){

    //     $serie = Episodio::find($id);
    //     if(is_null($serie)){
    //         return response()->json([
    //             'erro' => 'Recurso não encontrado'
    //         ], 404);
    //     }    
        
    //     $serie->fill($request->all());
    //     $serie->save();
    //     return $serie;
    // }

    // public function destroy(int $id){
        
    //     $qtsRecursosRemovidos = Episodio::destroy($id);
    //     if($qtsRecursosRemovidos === 0){
    //         return response()->json([
    //             'erro' => 'Recurso não encontrado'
    //         ], 404);
    //     }

    //     return response()->json('', 204);
    // }
}