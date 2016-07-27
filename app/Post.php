<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;

    public $directory = "/images/";

    protected $dates = ['deleted_at'];

    protected $fillable = ['title','content','path'];


    public function user(){
        return $this->belongsTo('App\User');
    }

    //by convention use scope+nameYouWant
    public static function scopeLatest($query){

        return $query->orderBy('id','asc')->get();

    }

    public function getPathAttribute($value){
        return $this->directory.$value;
    }
}
