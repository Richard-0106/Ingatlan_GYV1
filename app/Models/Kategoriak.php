<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriak extends Model
{
    protected $table='kategoriaks';
    protected $primaryKey='id';
    protected $fillable=[
        'id',
        'nev'
    ];
    use HasFactory;
}
