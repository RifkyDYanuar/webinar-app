<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $guarded; 
    protected $fillable = ['team_id', 'nama_member', 'telepon'];

    
}
