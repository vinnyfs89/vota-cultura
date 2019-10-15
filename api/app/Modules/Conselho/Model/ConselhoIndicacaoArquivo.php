<?php

namespace App\Modules\Conselho\Model;

use Illuminate\Database\Eloquent\Model;

class ConselhoIndicacaoArquivo extends Model
{
    protected $table = 'rl_conselho_indicacao_arquivo';
    protected $primaryKey = 'co_conselho_indicacao_arquivo';
    protected $fillable = [
        'co_representante',
        'co_arquivo',
        'tp_arquivo',
        'tp_inscricao',
    ];
}
