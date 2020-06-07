<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    protected $table = 'topicos';
    protected $fillable = [
        'codigo',
        'titulo',
    ];

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y H:i:s');
    }
    public function getUpdatedAtAttribute(){
        return Carbon::parse($this->attributes['updated_at'])->format('d/m/Y H:i:s');
    }

    public function getQtdQuestoesAttribute(){
        return str_pad($this->questoes()->count(), 4, '0', STR_PAD_LEFT);
    }

    public function questoes(){
        return $this->hasMany(Questao::class);
    }
}
