<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beyond Borders</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <x-header headline="Beyond Borders" subline="Your guide to exploring the world." />

    <main>

        <x-navigation />

        <section class="plain">
            <h1>Existing Users</h1>
            <x-table :data="$data" />
        </section>

    </main>

    <x-footer />
</body>

</html>
