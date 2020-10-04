    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>

    <body>

    </body>

    </html>
    <?php get_header() ?>
    <?php while (have_posts()) :  the_post(); ?>
    le contenu de la page about ici

    <?php endwhile; ?>
    <?php get_footer() ?>