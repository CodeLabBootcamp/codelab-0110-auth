<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    protected $fillable = ["username","password","name","super"];

    public function setPasswordAttribute($newPassword){
        $this->attributes["password"] = Hash::make($newPassword);

    }
}
git init
git add .
git commit -m "first commit"
git remote add origin git@github.com:CodeLabBootcamp/codelab-0110-auth.git
git push -u origin master