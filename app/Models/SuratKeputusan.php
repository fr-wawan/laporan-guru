<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeputusan extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function scopeFilter($query, array $filters)
  {
    $query->when($filters['search'] ?? false, function ($query, $search) {
      return $query->where('no_sk', 'LIKE', '%' . $search . '%');
    });
  }

  public function guru()
  {
    return $this->hasOne(Guru::class);
  }
}
