<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = [
        'file_path',
        'user_id',
        'file_name',
        'file_type',
        'file_size',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
