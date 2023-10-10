<!DOCTYPE html>
<html lang="en">

@extends('layouts.elements.web.head')

<body class="home-yellow">

  @extends('layouts.widgets.nav')

    <div id="anywhere-home"></div>

    <!-- banner area start three -->

    @yield('content')
    <!-- end call to action area -->

    <!-- start header area -->
    <!-- rts footer three area start -->
    @extends('layouts.widgets.footer')
    <!-- rts footer three area end -->
    <!-- ENd Header Area -->

    <!-- start loader -->
  @extends('layouts.elements.web.page-elements')
    <!-- progress Back to top End -->


   @extends('layouts.plugins.scripts')
</body>


</html>
