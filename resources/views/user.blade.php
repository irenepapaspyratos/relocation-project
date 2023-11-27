<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body>
    <x-header headline="BEYOND BORDERS" subline="Your guide to exploring the world." />

    <main>

        <x-navigation />

        <section class="plain">
            <h2>Good Morning, {{session('username')}}</h2>

            <a href="/logout">Log Out</a>
        </section>

    </main>

    <x-footer />
</body>

</html>
