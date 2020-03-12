<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $qstn_id
 * @property int $sub_id
 * @property int $module
 * @property int $paper_type
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property Question $question
 * @property Subject $subject
 */
class SubQstnMap extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['qstn_id', 'sub_id', 'module', 'paper_type', 'created_at', 'updated_at', 'created_by', 'updated_by'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo('App\Question', 'qstn_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject()
    {
        return $this->belongsTo('App\Subject', 'sub_id');
    }
}
