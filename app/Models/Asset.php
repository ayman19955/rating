<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = ['id','asset_type','asset_details'];
    protected $casts = [
        'asset_details' => 'array',
    ];
}
