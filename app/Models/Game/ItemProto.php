<?php

namespace App\Models\Game;

use App\Models\Mall\MallItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemProto extends Model
{
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
    protected $table = 'item_proto';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'vnum';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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
