<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlanok extends Model
{
    protected $table='ingatlanoks';
    protected $primaryKey='id';
    protected $fillable=[
        'id',
        'kategoria',
        'leiras',
        'hirdetesDatuma',
        'tehermentes',
        'ar',
        'kepUrl'
    ];
    use HasFactory;
    public function kategoria()
    {
        return $this->hasOne(Kategoriak::class, 'id', 'kategoria');
    }
}
