<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_province
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $code
 * @property Province $province
 */
class City extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_province', 'name', 'created_at', 'updated_at', 'code'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo('App\Province', 'id_province');
    }
}
