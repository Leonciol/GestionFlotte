<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'models',
        'marque',
        'last_maintenance',
        'nb_kilometrage',
        'nb_serie',
        'user_id',
        'status_id',
        'fournisseurs_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
   }
   public function status(){
    return $this->belongsTo(Status::class, "statuses_id");
}
}
