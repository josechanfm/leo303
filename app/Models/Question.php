<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=['exam_id','title','description','type','options','type','score'];
    protected $casts=['options'=>'array'];

    public function exam(){
        return $this->belongsTo(Exam::class);
    }
}
