<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DisabilityCategory;

class Disability extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'disability_category_id',
    ];

    public function category()
    {
        return $this->belongsTo(DisabilityCategory::class, 'disability_category_id');
    }
}
