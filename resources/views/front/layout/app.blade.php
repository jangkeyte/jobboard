<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <meta name="description" content="@yield('seo_meta_description')">
    <title>@yield('seo_title')</title>

    <link rel="icon" type="image/png" href="{{ asset('uploads/' . $global_settings_data->favicon) }}">    
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include('front.layout.styles')

    @include('front.layout.scripts')

</head>
<body>
    @include('front.layout.header')

    @yield('main_content')

    @include('front.layout.footer')

</body>
</html>
