<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('partials._head')

<body>

  @include('partials._nav')
  
    <div class="container">

		@include('partials._messages')
  	

      @yield('content')

      @include('partials._footer')

    </div>      <!-- {{-- End of container --}} -->

  
    <!-- Optional JavaScript
    jQuery first, then Popper.js, then Bootstrap JS -->
  @include('partials._javascripts')

</body>

</html>
