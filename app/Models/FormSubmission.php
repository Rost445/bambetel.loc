<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    use HasFactory;

    protected $table = 'forms_submissions';
    protected $fillable = ['form_name', 'data'];

    protected $casts = [
        'data' => 'array', // автоматично працює як масив
    ];
}
