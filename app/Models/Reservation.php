<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cardapio_id',
        'availability_id',
        'birthday_person',
        'age',
        'estimated_guests',
        'status',
    ];

    protected $attributes = [
        'status' => 'Pendente', // Defina 'Pendente' como padrão
    ];

    public function cardapio()
    {
        return $this->belongsTo(Cardapio::class);
    }

    public function availability()
    {
        return $this->belongsTo(Availability::class);
    }
}

