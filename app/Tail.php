<?php

namespace Cuentacuentos;

use Illuminate\Database\Eloquent\Model;

class Tail extends Model
{
    protected $table = 'tails';

    protected $fillable = ['name', 'description', 'author_id', 'contributor_id', 'reviewer_id'];

    
}
