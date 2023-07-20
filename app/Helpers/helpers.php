<?php

if (!function_exists('formatNpwp')) {
  function formatNpwp($value)
  {
    return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/', '$1.$2.$3.$4-$5.$6', $value);
  }
}
