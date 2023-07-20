<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadGuru extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function guru()
  {
    return $this->belongsTo(Guru::class);
  }

  public function scopeFilter($query, array $filters)
  {
    $query->when($filters['search'] ?? false, function ($query, $search) {
      return $query->whereHas('guru', function ($query) use ($search) {
        $query->where('nama', 'LIKE', '%' . $search . '%');
      });
    });
  }
}
