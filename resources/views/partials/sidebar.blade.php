<aside id="default-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
  aria-label="Sidebar">
  <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800">
    <h1 class="text-white text-center text-xl mt-5 font-semibold border-b pb-5 w-full border-b-gray-500 ">
      LAPORAN</h1>
    <ul class="space-y-2 font-medium text-white">
      <li class="mt-7">
        <a href="{{ route('admin.dashboard.index') }}" class="flex items-center p-2  rounded-lg  hover:bg-gray-700 group
          {{ Request::is('admin/dashboard*') ? 'text-white' : 'text-gray-500' }}
          ">

          <svg xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler   transition duration-75 dark:text-gray-400  icon-tabler-layout-dashboard"
            width="27" height="27" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M4 4h6v8h-6z"></path>
            <path d="M4 16h6v4h-6z"></path>
            <path d="M14 12h6v8h-6z"></path>
            <path d="M14 4h6v4h-6z"></path>
          </svg>
          <span class="ml-3 ">Dashboard</span>
        </a>
      </li>

      <li class="mt-7">
        <a href="{{ route('admin.keputusan.index') }}" class="flex items-center p-2  rounded-lg hover:bg-gray-700 group
          {{ Request::is('admin/keputusan*') ? 'text-white' : 'text-gray-500' }}
          ">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler  transition duration-75 dark:text-gray-400  group-hover:text-white icon-tabler-clipboard-text"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
            <path d="M9 12h6"></path>
            <path d="M9 16h6"></path>
          </svg>
          <span class="ml-3 transition duration-75 dark:text-gray-400  group-hover:text-white ">Surat
            Keputusan</span>
        </a>
      </li>

      <li class="mt-7">
        <a href="{{ route('admin.guru.index') }}" class="flex items-center p-2 text-gray-500 transition duration-75 dark:text-gray-400  group-hover:text-white  rounded-lg hover:bg-gray-700 group
          {{ Request::is('admin/guru*') ? 'text-white' : 'text-gray-500' }}
          ">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school" width="24" height="24"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
            <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
          </svg>

          <span class="ml-3  transition duration-75 dark:text-gray-400  group-hover:text-white

          
          
          ">Guru
          </span>
        </a>
      </li>


      <li class="mt-7">
        <a href="{{ route('admin.upload.index') }}" class="flex items-center p-2  rounded-lg hover:bg-gray-700 group
          {{ Request::is('admin/upload*') ? 'text-white' : 'text-gray-500' }}
          ">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-upload" width="24" height="24"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
            <path d="M7 9l5 -5l5 5"></path>
            <path d="M12 4l0 12"></path>
          </svg>
          <span class="ml-3 transition duration-75 dark:text-gray-400  group-hover:text-white ">Upload Guru</span>
        </a>
      </li>


    </ul>
  </div>
</aside>