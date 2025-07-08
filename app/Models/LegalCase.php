<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    // Si la tabla no se llama "legal_cases", añade:
    // protected $table = 'legal_cases';

    protected $fillable = [
        'title', 'description', 'status', 'legal_opinion', 'created_at', 'updated_at'
        // agrega los campos reales que tengas
    ];
}
