<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body class="">
  <div class="wrapper ">

    @include('layouts.sidebar_menu')

    <div class="main-panel">
      
      @include('layouts.navbar')

      @yield('content')

      <footer class="footer">
        <div class="container-fluid">
            &copy; E-Donasi 
            <script>
                document.write(new Date().getFullYear())
            </script> 
        </div>
      </footer>
  </div>
</div>

@include('layouts.footer')

</body>

</html>
