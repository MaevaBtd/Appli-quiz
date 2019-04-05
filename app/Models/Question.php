<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;
use App\Models\Level;

class Question extends Model {

    public function answers() {
        return $this->hasMany(Answer::class, 'questions_id');
    }

    public function level() {
        return $this->belongsTo(Level::class, 'levels_id');
    }

}