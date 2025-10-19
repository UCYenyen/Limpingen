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

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function request()
    {
        return $this->hasMany(Request::class);
    }
    public function getAllPackages() {
        return self::all();
    }
}
