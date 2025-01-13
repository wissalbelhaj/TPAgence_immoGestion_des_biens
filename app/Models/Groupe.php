<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    /**
     * Get all of the comments for the Groupe
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stagiaires()
    {
        return $this->hasMany(Stagiaire::class);
    }
}
