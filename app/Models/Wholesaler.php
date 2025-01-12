<?php

namespace App\Models;

use App\Models\Pricing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wholesaler extends Model
{
    use HasFactory;

    public function pricing() {
        return $this->hasMany(Pricing::class, 'wholesaler_id', 'id');
    }
    
}
