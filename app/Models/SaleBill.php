<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SaleBill extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total_price',
        'bill_status',
        'user_address',
        'user_email',
    ];

    public function getUserDataAttribute()
    {
        // Obtener el usuario relacionado (puedes ajustar esto según tu lógica)
        $user = User::find($this->user_id);

        // Devolver un array con los datos de User
        return [
            'user_id' => $user->id,
            'user_email' => $user->email,
            'user_address' => $user->address,
        ];
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'sales_bill_id');
    } 

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    } 

    
   



}
