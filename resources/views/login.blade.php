<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body>
    <x-header headline="BEYOND BORDERS" subline="Your guide to exploring the world." />

    <main>

        <x-navigation />

        <section class="formWrapper">
            <h2>Log In</h2>
            <x-loginForm />
        </section>

    </main>

    <x-footer />
</body>

</html>
