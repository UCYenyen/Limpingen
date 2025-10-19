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

    <link href="/css/global.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <x-navbar/>
    @yield('content')
    <x-footer/>
    <script>
        // 1. Ambil tombol hamburger dan panel menu
        const hamburgerBtn = document.getElementById('hamburgerButton');
        const mobilePanel = document.getElementById('panelMenuMobile');

        // 2. Pastikan kedua elemen ada sebelum menambahkan listener
        if (hamburgerBtn && mobilePanel) {

            // 3. Tambahkan 'event listener' untuk 'click'
            hamburgerBtn.addEventListener('click', function() {

                // 4. Toggle (tambah/hapus) kelas 'show' pada panel
                //    Inilah yang memicu CSS transisi Anda
                mobilePanel.classList.toggle('show');

                // (Opsional) Tambahkan kelas 'active' ke tombol itu sendiri
                // jika Anda ingin mengubah style tombolnya (misal jadi 'X')
                // hamburgerBtn.classList.toggle('active');
            });
        }
    </script>
</body>

</html>
