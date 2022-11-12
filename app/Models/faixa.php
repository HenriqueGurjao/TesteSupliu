<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faixa extends Model
{
    use HasFactory;

    protected $table = 'faixa';

    protected $fillable = ['nome','duracao'];
}
