<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
      'uid',
      'contact_no',
      'email',
      'address'
    ];
    public function contacts(){
        return $this->belongsTo(User::class, 'uid', 'id');
    }
}
