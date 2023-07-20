<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Page</title>


  @vite('resources/css/app.css')

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>



  <style>
    input[type=file]::file-selector-button {
      background-color: rgb(55 65 81 / var(--tw-bg-opacity));
    }

    input[type=file]::file-selector-button:hover {
      background-color: rgb(75 85 99 / var(--tw-bg-opacity));
    }

    .select2 {
      width: 100% !important;
    }


    .select2-selection {
      min-height: 48px;
      text-align: left;

    }

    .select2-selection__rendered {
      margin: 10px;
    }

    .select2-selection__arrow {
      margin: 10px;
    }

    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
</head>

<body class="bg-gray-200 font-['Rubik']">
  @include('partials.navbar')
  <div>
    @yield('content')
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

  <script>
    @if(session()->has('success'))

    Swal.fire({
        icon: 'success',
        title: 'BERHASIL!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 3000
    })

    @elseif(session()->has('error'))

    Swal.fire({
        icon: 'error',
        text: 'GAGAL!',
        title: '{{ session('error') }}',
        showConfirmButton: false,
        timer: 3000
    })

    @endif
  </script>

</body>

</html>