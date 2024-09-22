<?php

namespace App\Models\Game\Common;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'common';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locale';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'mKey';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mKey', 'mValue'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];
}
