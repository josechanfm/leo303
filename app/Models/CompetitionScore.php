<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionScore extends Model
{
    use HasFactory;

    protected $fillable=['organization_id','category','title','first','second','third','fifth','seventh','advance','participate'];

    public function competitions(){
        return $this->hasMany(Competition::class);
    }
}
