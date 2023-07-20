<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuruUpdateRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'nama' => 'required',
      'jenis_kelamin' => 'required',
      'nik' => 'required|numeric',
      'npwp' => 'required|numeric',
      'nuptk' => 'required|numeric',
      'tempat_lahir' => 'required',
      'tanggal_lahir' => 'required|date',
      'status' => 'required',
      'jenis_ptk' => 'required',
      'agama' => 'required',
      'email' => 'nullable|email',
      'alamat' => 'required',
      'tugas_tambahan' => 'nullable',
      'surat_keputusan_id' => 'required',
    ];
  }
}
