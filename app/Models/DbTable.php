<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbTable extends Model
#this model connect with the same name table

{
    public $dbtable = 'lect6laravel.db_tables';
    use HasFactory;
}
