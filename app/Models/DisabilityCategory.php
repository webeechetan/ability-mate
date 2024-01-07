<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disability;

class DisabilityCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function disabilities()
    {
        return $this->hasMany(Disability::class);
    }
}
