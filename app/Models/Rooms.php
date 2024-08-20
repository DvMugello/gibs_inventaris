<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $table="rooms";
    protected $guarded=['id'];
    protected $with=['project'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['project'] ?? false, function($query,$project){
            return $query->whereHas('project', function($query) use ($project){
                $query->where('name',$project);
            });
        });
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function inventaris(){
        return $this->hasMany(Inventaris::class);
    }

}
