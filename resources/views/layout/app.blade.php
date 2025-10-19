<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link href="/css/all.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <x-navbar/>
    @yield('content')
    <x-footer/>
    <script>
        const hamburgerBtn = document.getElementById('hamburgerButton');
        const mobilePanel = document.getElementById('panelMenuMobile');
        if (hamburgerBtn && mobilePanel) {
            hamburgerBtn.addEventListener('click', function() {
                mobilePanel.classList.toggle('show');
            });
        }
    </script>
</body>

</html>
