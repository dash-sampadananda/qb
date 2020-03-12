<?php

namespace Ap\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $marks
 * @property string $difficulty
 * @property string $qtext
 * @property float $time
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property SubQstnMap[] $subQstnMaps
 */
class Question extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['marks', 'difficulty', 'qtext', 'time', 'created_at', 'updated_at', 'created_by', 'updated_by'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subQstnMaps()
    {
        return $this->hasMany('App\SubQstnMap', 'qstn_id');
    }
}
