<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- <link rel="icon" type="image/svg+xml" href="/vite.svg" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory System</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/index.css')
</head>

<body>
    <div id="root"></div>

    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @vite('resources/js/script.js')
    <script>
        window.env = {
            API_BASE_URL: '{{ env("VITE_API_BASE_URL") }}'
        }
    </script>

</body>

</html>