<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;

class Tag extends Model {
    protected $table = 'tags';


    public function quizzes() {

        return $this->belongsToMany(Quiz::class, 'quizzes_has_tags', 'tags_id', 'quizzes_id');
    }
}