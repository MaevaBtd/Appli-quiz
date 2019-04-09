<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Answer extends Model {

    public function question() {

        return $this->belongsTo(Question::class, 'answers_id');
    }


    public function goodAnswer() {
        return $this->hasOne(Question::class);
    }

}