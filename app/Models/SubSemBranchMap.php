<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $sub_id
 * @property int $branch_id
 * @property int $sem
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property Branch $branch
 * @property Subject $subject
 */
class SubSemBranchMap extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['sub_id', 'branch_id', 'sem', 'created_at', 'updated_at', 'created_by', 'updated_by'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject()
    {
        return $this->belongsTo('App\Subject', 'sub_id');
    }
}
