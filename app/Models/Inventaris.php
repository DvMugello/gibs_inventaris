<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    protected $with=['items','periode','rooms','rekap'];
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['rooms'] ?? false, function($query,$rooms){
            return $query->whereHas('rooms', function($query) use ($rooms){
                $query->where('name',$rooms);
            });
        });
        $query->when($filters['periode'] ?? false, function($query,$periode){
            return $query->whereHas('periode', function($query) use ($periode){
                $query->where('year',$periode);
            });
        });
        $query->when($filters['items'] ?? false, function($query,$items){
            return $query->whereHas('items', function($query) use ($items){
                $query->where('name',$items);
            });
        });
    }

    public function items()
    {
        return $this->belongsTo(Items::class);
    }
    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }
    public function rooms()
    {
        return $this->belongsTo(Rooms::class);
    }
    public function rekap()
    {
        return $this->belongsTo(Rekap::class);
    }
}
