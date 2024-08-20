<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Công ty TNHH Chỉ Phẫu Thuật CPT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/cpt.css') }}">
  @yield('css')

</head>

<body>
    @include('layouts.client.header')
    @yield('content')
    @include('layouts.client.footer')
</body>

</html>
