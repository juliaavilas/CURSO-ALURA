<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Serie;

class Episodio extends Model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];
    protected $appends = ['links'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function getAssistidoAttribute($assistido): bool{ //método acessor de atributo (Accessors)
        return $assistido;
    }

    public function getLinksAttribute(): array{
        return [
            'self' => '/episodios/'. $this->id,
            'serie' => '/series/'. $this->serie_id
        ];
    }
}