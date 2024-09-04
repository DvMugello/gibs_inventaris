<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $table="rekaps";

    protected $guarded=['periode','project','inventaris'];

    public static function last()
    {
        return static::all()->last();
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }
}
