<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;
    protected $fillable=['exam_id','user_id','submitted','valid_at','expire_at'];

    public function exam(){
        return $this->belongsTo(Exam::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class)->with('question');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
