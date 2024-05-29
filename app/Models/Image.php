<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'measures' => 'array',
    ];

    protected $attributes = [
        'measures' => '["640x387","768x304","768x448","816x336","1088x448","1320x720"]',
    ];

    protected static function boot()
{
    parent::boot();

    static::creating(function ($model) {
        if (empty($model->measures)) {
            $model->measures = json_encode(["640x387","768x304","768x448","816x336","1088x448","1320x720"]);
        }
    });
}

    
}
