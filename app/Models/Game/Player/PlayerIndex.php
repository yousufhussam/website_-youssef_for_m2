<?php

namespace App\Models\Game\Player;

use App\Models\Account;
use App\Models\Enums\CharacterJobEnum;
use App\Models\Enums\EmpireEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerIndex extends Model
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
    protected $table = 'player_index';

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
    ];

    /**
     * Get the account that owns the player index.
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'id', 'id');
    }
}
