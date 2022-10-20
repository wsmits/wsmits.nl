<?php

namespace App\Models;

use App\Models\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;
    use HasUUID;

    /**
     * The attributes that should be hidden for arrays.
     * @see https://darkghosthunter.medium.com/laravel-uuid-for-public-id-for-the-application-9f2b93cf6795
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Addressbook::class);
    }

    /**
     * @return HasMany
     */
    public function contactInformation(): HasMany
    {
        return $this->hasMany(ContactInformation::class);
    }

    /**
     * @return HasMany
     */
    public function contactAddresses(): HasMany
    {
        return $this->hasMany(ContactAddress::class);
    }
}
