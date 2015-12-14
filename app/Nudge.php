<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nudge extends Model
{
    /**
     * The database table used by the model.
     * 
     * @var string
     */
    protected $table = 'nudges';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender_id',
        'receiver_id',
    ];

    public function sender()
    {
        return $this->hasOne('App\User');
    }
}
