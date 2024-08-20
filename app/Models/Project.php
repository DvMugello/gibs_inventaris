<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $table="projects";
    protected $guarded=['id'];

public static function last()
{
    return static::all()->last();
}
public function getPhoto($bg = 'F98502', $color = 'FFF')
    {
        $buildQueryString = str_replace(' ', '+', $this->name);
        $mediaItems = $this->getFirstMediaUrl('image');
        $imgDefault = "https://ui-avatars.com/api/?background=$bg&color=$color&name={$buildQueryString}";

        if ($mediaItems) {
            return $mediaItems;
        } else {
            return $imgDefault;
        }
    }



    public function rooms(){
        return $this->hasMany(Rooms::class);
    }
}


