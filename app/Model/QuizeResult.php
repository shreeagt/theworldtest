<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QuizeResult extends Model
{
    protected $table = "quizeresult";
    protected $primaryKey = 'quizeresult_id';
    protected $fillable = [
        'question_id', 'answer', 'ip_address', 'brower_name', 'created_at', 'updated_at'
    ]; 
}
