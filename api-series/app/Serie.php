<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Episodio;


class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];
   // protected $perPage = 3; //itens por pagina
   protected $appends = ['links']; // dado que não esta na tabela, adicionado por método acessor


    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    // public function setNomeAttribute($nome){ //mudar antes de salvar, método acessor
    //     $this->attrubutes['nome'] = strtoupper($nome);
    // }

    public function getLinksAttribute(): array{
        return [
            'self' => '/series/'. $this->id,
            'episodios' => '/series/'. $this->id . '/episodios'
        ];
    }
}