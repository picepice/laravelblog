<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html lang="en">
  <head>
     @include('partials._head')
  </head>

<body>
  @include('partials._nav')
          
      <div id="app">

         <main class="py-4">
          
          <div class="container">
             @include('partials._messages')    
            @yield('content')

          </div> <!-- end of container-->

        </main>

      </div><!-- /.app -->

  @include('partials._footer')    

  @include('partials._javascript')

  @yield('scripts')
</body>
</html>
