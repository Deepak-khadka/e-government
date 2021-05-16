<?php


namespace Neputer\Entities;


use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';

    protected $fillable = [
        'user_id', 'message', 'status'
    ];

}
