<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beyond Borders</title>

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <x-Header />

    <main>

        <x-Navigation />

        <section class="featured-articles">
            <h1>About-View<h1>
        </section>

    </main>

    <x-Footer />
</body>

</html>
