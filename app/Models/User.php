<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'app_users';

    const NO_FIRSTNAME = 1;
    const NO_LASTNAME = 2;
    const NO_EMAIL = 4;
   // const NO_EMAIL_CHECK = 8;
    const NO_PASSWORD = 8;
    const NO_PASSWORD_CHECK = 32;


        // const NO_NAME = 1; // 0001
        // const NO_EDITOR = 2; // 0010
        // const NO_RELEASE_DATE = 4; // 0100
        // const NO_PLATFORM = 8; // 1000


}