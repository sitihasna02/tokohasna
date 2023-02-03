<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table ="pesanans";
    protected $guarded = ['id'];

// coffe
    public function colors()
    {
        return $this->belongsTo(color::class);
    }

// bland
    public function brands()
    {
        return $this->belongsTo(brand::class);
    }
    
// bvrages
    public function bvrages()
    {
        return $this->belongsTo(bvrages::class);
    }
}
