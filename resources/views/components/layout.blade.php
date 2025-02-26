<!DOCTYPE html>
<html lang="en">
<x-page-head></x-page-head>

<body>
    <x-navbar></x-navbar>
    <div class="w-full">
        {{ $slot }}
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
