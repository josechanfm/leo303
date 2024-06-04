<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $fillable=['organization_id','user_id','sender','recipient','cc','bcc','subject','message'];

    public function organization(){
        return $this->belongsTo(Organization::class);
    }
}
