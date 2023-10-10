<!DOCTYPE html>
<html lang="en">

@extends('layouts.elements.web.head')

<body class="home-yellow">

  @extends('layouts.widgets.nav')

    <div id="anywhere-home"></div>

    <!-- banner area start three -->

@include('layouts.elements.home.banner-home')



@include('layouts.elements.home.about')


@include('layouts.widgets.clients')

   @include('layouts.elements.home.training')





    <!-- start call to action area -->
 @include('layouts.widgets.cta')
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
