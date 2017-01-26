<?php

namespace QuickInmobiliario;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'first_name', 'business_name', 'document_type', 'document', 'username', 'email', 'password', 'user_type_id', 'image_perfil', 'newsletter',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'password', 'remember_token',
    ];

    public function commission() {
        return $this->hasOne(Commission::class);
    }

    public function requests() {
        return $this->hasMany(Request::class);
    }

    public function punctuations() {
        return $this->hasMany(Punctuation::class);
    }

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }

    public function user_type() {
        return $this->belongsTo(UserType::class);
    }

    public function properties() {
        return $this->hasMany(Property::class);
    }
    
    public function price_plans() {
        return $this->belongsToMany(PricePlan::class, 'users_has_plans');
    }

    public function profile(){
      return $this->belongsTo(Profile::class);
    }
    public function messages() {
        return $this->hasMany(Messages::class, 'user_id');
    }

}
