<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Lecture extends Model
{
    protected $table='lectures';
    protected $guarder =['user_id','name','grade'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
