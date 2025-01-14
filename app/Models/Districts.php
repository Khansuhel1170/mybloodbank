<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;
    protected $fillable = ['name','state_id'];
    public function cities()
    {
        return $this->hasMany(Cities::class);
    }

    public function states()
    {
        return $this->belongsTo(States::class);
    }
}
