<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property boolean $active
 * @property integer $sequence
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['code', 'name', 'created_at', 'updated_at', 'active', 'sequence'];

}
