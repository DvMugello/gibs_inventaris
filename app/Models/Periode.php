<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;
    protected $table="periodes";
    protected $guarded=['id'];
    public function inventaris(){
        return $this->hasMany(Inventaris::class);
    }
}
