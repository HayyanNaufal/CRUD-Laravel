
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>@yield('judul')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('layout/css')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        @include('layout/sidebar')


        <!-- Content Start -->
        <div class="content">
           @include('layout/navbar')

                @yield('konten')

            @include('layout/footer')
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('layout/js')
</body>

</html>