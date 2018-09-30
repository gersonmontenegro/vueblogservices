<?php


namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Posts extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'posts';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'text', 'creator'
    ];
}