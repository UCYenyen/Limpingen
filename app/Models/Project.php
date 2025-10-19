<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'desription',
        'image_url',
        'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getFeaturedProjects(){
        return self::latest()->limit(4)->get();
    }
    public function getAllProjects() {
        return self::all();
    }
}
