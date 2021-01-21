<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appart extends Model
{
    protected $fillable = ['titre','prix','lieu','date_ajout','photo','photos','description'];
}
