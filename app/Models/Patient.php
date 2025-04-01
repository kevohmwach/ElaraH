<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'patient';

    
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
