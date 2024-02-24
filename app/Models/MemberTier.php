<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberTier extends Model
{
    use HasFactory;
    protected $fillable=['member_id','tier_code','valid_at','expired_at','remark'];
}
