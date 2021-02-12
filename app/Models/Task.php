<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
    	'user_id',
    	'isActive',
    	'position'
    ];

    public function user(){
    	$this->belongsTo(User::class);
    }
}
