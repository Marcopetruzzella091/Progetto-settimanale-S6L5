<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Attivita;
use App\Models\User;

class Progetto extends Model
{
    use HasFactory;

    // Modifica la dichiarazione del tipo di ritorno in HasMany
    public function Attivita(): HasMany
    {
        return $this->hasMany(Attivita::class);
    }
   
}
