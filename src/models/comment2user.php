<?php

namespace bdd\models;
use Illuminate\Database\Eloquent\Model;

class comment2user extends Model{
    protected $table='comment2user';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable = [ 'comment_id', 'user_id'
    ];
    

}
