<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasUUID
{
    /**
     * Boot function, is executed when setting up the model class.
     */
    public static function bootHasUUID()
    {
        static::creating(
            function ($model) {
                $uuidFieldName = $model->getUUIDFieldName();
                if (empty($model->$uuidFieldName)) {
                    $model->$uuidFieldName = static::generateUUID();
                }
            }
        );
    }

    /**
     * @return string
     */
    public static function generateUUID(): string
    {
        return Str::uuid()->toString();
    }

    /**
     * @param $uuid
     * @return mixed
     */
    public static function findByUuid($uuid)
    {
        return static::byUUID($uuid)->first();
    }

    /**
     * @param $query
     * @param $uuid
     *
     * @return mixed
     */
    public function scopeByUUID($query, $uuid)
    {
        return $query->where($this->getUUIDFieldName(), $uuid);
    }

    /**
     * @return string
     */
    public function getUUIDFieldName(): string
    {
        if (!empty($this->uuidFieldName)) {
            return $this->uuidFieldName;
        }

        return 'uuid';
    }
}
