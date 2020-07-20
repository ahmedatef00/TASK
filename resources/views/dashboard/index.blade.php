@include('dashboard.includes.header')

<body class="dark-edition">

    <div class="wrapper ">


        <div class="main-panel">

            @yield('content')

        </div>

    </div>

    @include('dashboard.includes.scripts')


</body>

</html>