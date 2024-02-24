<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CompetitionApplication extends Model
{
    use HasFactory;
    protected $fillable=['competition_id','organization_id','member_id','name_zh','name_fn','given_name','family_name','middle_name','display_name','id_num','gender','dob','belt_rank','email','mobile','category','weight','role','avatar','staff_options','referee_options'];
    protected $casts=['staff_options'=>'json','referee_options'=>'json'];
    protected $appends=['avatar_url'];

    public function getAvatarUrlAttribute(){
        return $this->avatar?Storage::url($this->avatar):'';
    }
    public function competition(){
        return $this->belongsTo(Competition::class)->with('media');
    }
    public function organization(){
        return $this->belongsTo(Organization::class);
    }
    public static function unique($competition, $role, $identifier, $value){
        //$applications=$competition->applications->where($identifier, $value)->selectRaw('category, weight, count(*) as count')->groupBy('category,weight');
        $asAthleteDuplicateCount=self::whereBelongsTo($competition)
                            ->where($identifier, $value)
                            ->selectRaw('category, weight, COUNT(*) as count')
                            ->where('role',$role)
                            ->groupBy('category','weight')
                            ->having('count','>=',1)
                            ->count();
        $byRoleDuplicateCount=self::whereBelongsTo($competition)
                            ->where($identifier, $value)
                            ->selectRaw('role, COUNT(*) as count')
                            ->groupBy('role')
                            ->having('count','>',1)
                            ->count();
        
        //dd($asAthleteDuplicateCount);
        if($asAthleteDuplicateCount >=1 || $byRoleDuplicateCount >= 1){
            dd('duplicated');
        }else{
            dd('yes yes');
        }
        if($competition->scope=='PUB'){
        }else{

        }
        dd($applications);
    }

}
