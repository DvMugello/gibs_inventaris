<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $table="inventaris";
    protected $guarded=['id'];

    protected $with=['item','periode','rooms','rekap'];
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
        $query->when($filters['item'] ?? false, function($query,$item){
            return $query->whereHas('item', function($query) use ($item){
                $query->where('name',$item);
            });
        });
    }

    public function item()
    {
        return $this->belongsTo(Items::class,'item_id','id');
    }
    public function periode()
    {
        return $this->belongsTo(Periode::class ,'period_id','id');
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
