<?php get_header() ?>
    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <article>
        <h1><?= $title ?></h1>

        <p><?= $content ?></p>

        <p><?= do_shortcode("[button href='{$button['link']}']{$button['title']}[/button]") ?></p>
    </article>
<?php get_footer() ?>
