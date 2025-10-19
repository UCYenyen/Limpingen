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
        'service_Id',
    ];
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
