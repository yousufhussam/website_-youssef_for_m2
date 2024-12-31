<?php

namespace App\Models\Game\Highscore;

use App\Models\Enums\EmpireEnum;
use Illuminate\Database\Eloquent\Model;

class GuildHighscoreCache extends Model
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
    protected $connection = 'website';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guild_highscore_cache';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
        'empire' => EmpireEnum::class,
        'date' => 'datetime'
    ];
}
