<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
      'uid',
      'contact_no',
      'email',
      'address'
    ];
    public function users(): BelongsTo{
        return $this->belongsTo(User::class, 'uid', 'id');
    }
}
