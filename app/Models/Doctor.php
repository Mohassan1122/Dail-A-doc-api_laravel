<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','specialization', 'qualification', 'bio'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}