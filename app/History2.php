<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History2 extends Model
{
    protected $guarded = array('id');
    protected $table = 'histories2';
    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
    public function histories2()
    {
      return $this->hasMany('App\History2');

    }
}