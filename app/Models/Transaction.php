<?php

namespace App\Models;

use App\Models\Renter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'renter_id',
        'tool_id',
        'lama_penyewaan',
        'total_biaya',
        'status_penggunaan',
        'latitude',
        'longtitude',
    ];

    /**
     * Get the renter that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function renter(): BelongsTo
    {
        return $this->belongsTo(Renter::class);
    }

    /**
     * Get the tool that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tool(): BelongsTo
    {
        return $this->belongsTo(Tool::class);
    }
}
