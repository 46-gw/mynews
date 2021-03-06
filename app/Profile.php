<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected $guarded = array('id');
    
protected $table = 'profiles';

    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    
    // Profileモデルに関連付けを行う
    public function profile_histories()
    {
      return $this->hasMany('App\ProfileHistory');
    }
}