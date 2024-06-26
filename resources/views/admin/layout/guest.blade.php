<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

        <link rel="icon" type="image/png" href="uploads/favicon.png">
        
        <title>Admin Panel</title>

        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

        @include('admin.layout.styles')

    </head>
    
    <body>
        <div id="app">
            <div class="main-wrapper">                
                <section class="section">
                    @yield('main_content')
                </section>                
            </div>
        </div>

        @include('admin.layout.scripts')

    </body>
</html>