<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleFormRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_data',
        'student_id',
        'is_valid',
    ];

    // Relationships
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
