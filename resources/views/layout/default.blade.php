@include('layout/head')
<title>@yield('title')</title>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('layout/section/navbartop')
        @include('layout/section/sidebar')
        <div class="content-wrapper">
            <div>
                @if ($message = Session::get('success'))
                <script>
                    Swal.fire({
                        timer: 1500,
                        title: `Selamat!`,
                        text: "{{ $message }}",
                        icon: "success",
                        showConfirmButton: false,
                    })
                </script>
                @endif

                @if ($message = Session::get('error'))
                <script>
                    Swal.fire({
                        timer: 1500,
                        title: `Maaf!`,
                        text: "{{ $message }}",
                        icon: "error",
                        showConfirmButton: false,
                    })
                </script>
                @endif

                @if ($message = Session::get('warning'))
                <script>
                    Swal.fire({
                        timer: 1500,
                        title: `Cek Kembali!`,
                        text: "{{ $message }}",
                        icon: "warning",
                        showConfirmButton: false,
                    })
                </script>
                @endif

                @if ($message = Session::get('info'))
                <script>
                    Swal.fire({
                        timer: 1500,
                        text: "{{ $message }}",
                        icon: "info",
                        showConfirmButton: false,
                    })
                </script>
                @endif

                @if ($errors->any())
                <script>
                    Swal.fire({
                        timer: 1500,
                        title: `Maaf!`,
                        text: "{{ $message }}",
                        icon: "error",
                        showConfirmButton: false,
                    })
                </script>
                @endif
            </div>
            <script>
                //alert flash out
                window.setTimeout(function() {
                    $(".alert").fadeTo(500, 0).slideUp(500, function() {
                        $(this).remove();
                    });
                }, 3000);
            </script>
            @yield('content')
            @include('layout/section/footer')
            @yield('custom-script')
        </div>
    </div>
</body>

@include('layout/footer')