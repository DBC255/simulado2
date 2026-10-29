<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class movimentacoes extends Model
{
    use HasFactory;
    protected $fillable = [
        'produto_id',
        'quantidade',
        'tipo'
    ];

    public function produtos(): BelongsTo
    {
        return $this->belongsTo(produtos::class);
    }
}
