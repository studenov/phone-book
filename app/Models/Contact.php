<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'date_of_birth'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phoneNumbers()
    {
        return $this->hasMany(PhoneNumber::class);
    }
}
