<!doctype html>
<html @lang('en')>
<head>
 @include('layouts/part/head')
 @include('layouts/part/css')
</head>

<body id="page-top" >
   @include('layouts/part/nav')

<div >
  @yield('content')
</div>

  @include('layouts/part/footer')
  @include('layouts/part/script')

@yield('script')
 </body>
</html