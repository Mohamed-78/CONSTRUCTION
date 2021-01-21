<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
   protected $fillable = ['titre','prix','lieu','dimension','photo','photos','description'];
}
