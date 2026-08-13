<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
     protected $fillable = ['title', 'status', 'achievements', 'hours_played'];
}
