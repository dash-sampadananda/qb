<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $full_name
 * @property int $created_by
 * @property int $updated_by
 * @property string $created_at
 * @property string $updated_at
 * @property SubSemBranchMap[] $subSemBranchMaps
 */
class Branch extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'full_name', 'created_by', 'updated_by', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subSemBranchMaps()
    {
        return $this->hasMany('App\SubSemBranchMap');
    }
}
