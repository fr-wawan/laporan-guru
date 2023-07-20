<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;

class Guru extends Model
{
  use HasFactory, Notifiable;

  protected $guarded = [];

  public function scopeFilter($query, array $filters)
  {
    $query->when($filters['search'] ?? false, function ($query, $search) {
      return $query->where('nama', 'LIKE', '%' . $search . '%');
    });
  }

  public function suratKeputusan()
  {
    return $this->belongsTo(SuratKeputusan::class);
  }

  public function uploadGuru()
  {
    return $this->hasMany(UploadGuru::class);
  }

  protected $hidden = [
    'password',
    'remember_token',
  ];

  protected $casts = [
    'password' => 'hashed',
  ];
}
