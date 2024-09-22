<?php

namespace App\Models\Game\Player;

use Illuminate\Database\Eloquent\Model;

class ItemAttrRare extends Model
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
    protected $connection = 'player';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item_attr_rare';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'apply';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

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
