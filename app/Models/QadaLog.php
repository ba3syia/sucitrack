<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QadaLog extends Model
{
    use HasFactory;

    protected $table = 'qada_logs';

    protected $fillable = [
        'user_id',
        'qada_date',
        'prayer_type',
        'status',
        'notes',
    ];

    protected $casts = [
        'qada_date' => 'date',
        'status' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function menstrualRecord(): BelongsTo
    {
        return $this->belongsTo(MenstrualRecord::class);
    }
}