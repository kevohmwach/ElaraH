<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CallScript extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'callscript';

    
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
