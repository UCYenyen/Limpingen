<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /** @use HasFactory<\Database\Factories\PackageFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'desription',
        'price',
        'service_id',
    ];

    public function services()
    {
        return $this->belongsTo(Service::class);
    }
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
