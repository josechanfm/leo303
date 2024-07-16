<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollResponse extends Model
{
    use HasFactory;
    protected $fillable=['poll_id','ip_address','username','answer'];

    public function poll(){
        return $this->belongsTo(Poll::class);
    }
}
