<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    //
    //protected $primaryKey = 'matricula';

    protected $fillable = ['nome', 'qtdAlunos'];

    protected $guarded = ['projetor'];
}
