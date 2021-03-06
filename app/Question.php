<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['description', 'answer', 'questionnaire_id', 'photo'];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }
}
