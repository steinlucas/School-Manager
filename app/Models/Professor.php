<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $timestamps = false;
    public $table = 'professores';
    use HasFactory;
}
