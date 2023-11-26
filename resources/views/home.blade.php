<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beyond Borders</title>

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <x-header headline="Beyond Borders" subline="Your guide to exploring the world." />

    <main>

        <x-navigation />

        <section class="featured-articles">
            <article id="blog-1" class="article">
            </article>
            <article id="blog-2" class="article">
                <h2>How to Relocate</h2>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus maxime est quae dignissimos quidem. Repudiandae, cumque aliquid, corporis itaque velit, eaque quia hic labore doloribus adipisci nam quam? Corrupti, aspernatur?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus maxime est quae dignissimos quidem. Repudiandae, cumque aliquid, corporis itaque velit, eaque quia hic labore doloribus adipisci nam quam? Corrupti, aspernatur?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus maxime est quae dignissimos quidem. Repudiandae, cumque aliquid, corporis itaque velit, eaque quia hic labore doloribus adipisci nam quam? Corrupti, aspernatur?</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus maxime est quae dignissimos quidem. Repudiandae, cumque aliquid, corporis itaque velit, eaque quia hic labore doloribus adipisci nam quam? Corrupti, aspernatur?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus maxime est quae dignissimos quidem. Repudiandae, cumque aliquid, corporis itaque velit, eaque quia hic labore doloribus adipisci nam quam? Corrupti, aspernatur?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus maxime est quae dignissimos quidem. Repudiandae, cumque aliquid, corporis itaque velit, eaque quia hic labore doloribus adipisci nam quam? Corrupti, aspernatur?</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus maxime est quae dignissimos quidem. Repudiandae, cumque aliquid, corporis itaque velit, eaque quia hic labore doloribus adipisci nam quam? Corrupti, aspernatur?</p>

            </article>
            <article id="blog-3" class="article">
            </article>
        </section>

    </main>

    <x-footer />
</body>

</html>
