<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'groupe_id'];
    /**
     * Get the user that owns the Stagiaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }
    /**
     * The roles that belong to the Stagiaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */


    public function modules()
    {
        return $this->belongsToMany(Module::class, 'notes')->withPivot('note');
    }
}
