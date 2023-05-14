<!DOCTYPE html>
<html lang="en" class="no-js">

<head>


    @include('base.include-seo')

    @include('base.include-css')


</head>

<body class="is-boxed has-animations">
    <div class="body-wrap">
        @include('landing.header')
        @include('landing.main')
        @include('landing.footer')




    </div>

    <script src="{{ asset('template/dist/js/main.min.js') }}"></script>
    @include('base.include-js')
</body>

</html>
