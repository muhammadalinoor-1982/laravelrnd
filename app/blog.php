<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
protected $fillable=[
  'title',
    'user_id',
     'details',
      'file'
];

public function user(){
    return $this->belongsTo('App\User');
}

}
