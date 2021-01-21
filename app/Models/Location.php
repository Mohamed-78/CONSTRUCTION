<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['titre','prix','date_ajout','lieu','photo','photos','description'];
}
