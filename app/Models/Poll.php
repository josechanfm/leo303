<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Poll extends Model
{
    use HasFactory;
    protected $fillable=['question','image','option_a','option_b','option_c','option_d','option_e','answer','reference','status','user_id'];
    protected $appends=['responses_count'];

    public static function boot(){
        parent::boot();
        self::creating(function($model){
            $model->uuid=Str::uuid();
            $model->status=false;
            if(auth() && auth()->user()->id){
                $model->user_id=auth()->user()->id;
            }
        });
    }
    public function getResponsesCountAttribute(){
        return $this->responses->count();
    }
    public function responses(){
        return $this->hasMany(PollResponse::class);
    }
}
