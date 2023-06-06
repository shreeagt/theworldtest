<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $table = "poll_of_the_day";
    protected $primaryKey = 'poll_id';
}
