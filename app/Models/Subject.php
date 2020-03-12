<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $sub_name
 * @property string $full_name
 * @property int $created_by
 * @property int $updated_by
 * @property string $created_at
 * @property string $updated_at
 * @property SubQstnMap[] $subQstnMaps
 * @property SubSemBranchMap[] $subSemBranchMaps
 */
class Subject extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['sub_name', 'full_name', 'created_by', 'updated_by', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subQstnMaps()
    {
        return $this->hasMany('App\SubQstnMap', 'sub_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subSemBranchMaps()
    {
        return $this->hasMany('App\SubSemBranchMap', 'sub_id');
    }
}
