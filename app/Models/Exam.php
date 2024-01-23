<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable=['organization_id','category_code','title','description','published'];

    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function questionsWithoutCorrect(){
        return $this->hasMany(Question::class)->addSelect(['id','title','options']);
    }
    public function papers(){
        return $this->hasMany(Paper::class)->with('user');
    }
}
