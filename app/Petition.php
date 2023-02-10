<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    Protected $fillable = ['title', 'description', 'category', 'author', 'signees'];
}
