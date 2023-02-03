<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    use HasFactory;
    protected $table ="colors";
    protected $guarded = ['id'];
    
    public function pesanans()
    {
        return $this->hasMany(pesanan::class);
    } 
}
