<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property string $remember_token
 * @property boolean $confirm
 * @property string $firstname
 * @property string $lastname
 * @property string $aboutme
 * @property string $hobby
 * @property integer $city
 * @property integer $province
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 */
class Member extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'created_at', 'updated_at', 'remember_token', 'confirm', 'firstname', 'lastname', 'aboutme', 'hobby', 'city', 'province', 'facebook', 'twitter', 'instagram'];

}
