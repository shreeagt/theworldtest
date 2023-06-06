<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PollResult extends Model
{
    protected $table = "poll_of_the_day_result";
    protected $primaryKey = 'poll_result_id';
    protected $fillable = [
        'poll_id', 'answer', 'ip_address', 'brower_name', 'created_at', 'updated_at'
    ]; 
}
