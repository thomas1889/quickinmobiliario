<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model {

    protected $fillable = ['email', 'message', 'user_id', 'user_message_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
