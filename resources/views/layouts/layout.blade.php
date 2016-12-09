<!DOCTYPE HTML>
<html lang="eng">
    <head>
        @include('layouts.head')
    </head>    

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    	@include('layouts.navigation')

        @include('errors.error')

        @yield('content')

        @include('layouts.footer')

        @include('layouts.js')

</body>
</html>
