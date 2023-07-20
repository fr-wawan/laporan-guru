@props(['headers'])
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-auto">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr class="text-center">
        <th scope="col" class="px-6 py-5">
          No
        </th>
        @foreach ($headers as $header)
        <th scope="col" class="px-6 py-5">
          {{ $header }}
        </th>
        @endforeach
        <th scope="col" class="px-6 py-5">
          Actions
        </th>
      </tr>
    </thead>
    <tbody>
      {{ $slot }}
    </tbody>
  </table>
</div>