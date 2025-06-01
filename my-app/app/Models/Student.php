<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'surname',
        'name',
    ];

     // Обратная связь belongsTo с Group (по желанию)
     public function group()
     {
         return $this->belongsTo(Group::class);
     }
}
