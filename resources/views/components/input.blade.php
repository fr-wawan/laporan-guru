@props([
'label',
'name',
'type' => 'text',
'value' => '',
'placeholder' => '',
'disabled' => false,
])

<div class="my-3 w-full">
  <label for="{{ $name }}">{{ $label }}</label>
  <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
    class="block border border-gray-300 w-full p-2 rounded-lg mt-2 placeholder:text-sm   " value="{{ $value }}"
    placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }}>

  @error($name)
  <p class="text-red-600 mt-2">{{ $message }}</p>
  @enderror
</div>