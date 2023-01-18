<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    use HasFactory;
    protected $fillable = [
        'alertName',
        'description',
        'heroesRequired',
        'img',
        'datetime',
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }

}