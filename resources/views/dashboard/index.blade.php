@include('dashboard.includes.header')

<body class="dark-edition">
    <div class="wrapper ">


        <div class="main-panel">


            @yield('content')

            <script>
                const x = new Date().getFullYear();
                let date = document.getElementById('date');
                date.innerHTML = '&copy; ' + x + date.innerHTML;
            </script>
        </div>

    </div>

    @include('dashboard.includes.scripts')

  
</body>

</html>
