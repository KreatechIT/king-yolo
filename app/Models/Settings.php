<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'group',
        'name',
        'payload',
        'payload_type',
    ];
    
    protected $casts = [
        'payload' => 'json',  // Cast the payload field as JSON
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($data) {
            if (empty($data->payload_type)) {

                $payload = $data->payload;

                if (strpos($payload, '.jpg') !== false || strpos($payload, '.png') !== false || strpos($payload, '.jpeg') !== false || strpos($payload, 'images') !== false || strpos($payload, 'image') !== false) {
                    $data->payload_type = 'image';
                } else {
                    $data->payload_type = 'text';
                }
            }
        });
       
    }
}
