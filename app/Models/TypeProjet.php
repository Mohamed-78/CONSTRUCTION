<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeProjet extends Model
{
    protected $fillable = ['titre','prix','type','date_ajout','photo','photos','description'];
}
