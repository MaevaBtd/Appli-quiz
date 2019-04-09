<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Tag;
use App\Models\User;


class Quiz extends Model {
    protected $table = 'quizzes';

    public function questions() {
        return $this->hasMany(Question::class, 'quizzes_id');
   }

    // Et pour `belongsToMany`, 4 arguments : ModelCible, table_pivot, foreign_key_1, foreign_key_2)
   public function tags() {
       return $this->belongsToMany(Tag::class, 'quizzes_has_tags', 'quizzes_id', 'tags_id');
   }  

   public function author() {
       return $this->belongsTo(User::class, 'app_users_id');
   }

  
}
