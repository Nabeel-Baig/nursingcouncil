


<!doctype html>
<html lang="en">
@php
    $frontSetting = App\Models\FrontSetting::first();
@endphp
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('layouts.front_css_links')
  @yield('css')
  <title>The Nursing Council</title>
</head>

<body>
@include('layouts.front_nav')

@yield('main-content')

@include('layouts.front_footer')
@include('layouts.front_js_links')
@yield('scripts')
@yield('scripts-bottom')
</body>
</html>
