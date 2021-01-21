<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
   protected $fillable = ['titre','prix','lieu','date_ajout','photo','photos','description'];
}
