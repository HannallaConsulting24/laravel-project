<?php

namespace App\Models;

use App\Models\Wholesaler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pricing extends Model
{
    use HasFactory;
    public function wholesaler() {
        return $this->belongsTo(Wholesaler::class, 'wholesaler_id', 'id');
    }
}
