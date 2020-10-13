<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon super site</title>
</head>

<body>
  <main class="main-content">
    <div class="fullwidth-block inner-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content">
              <h2 class="entry-title"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> <!-- .main-content -->
</body>

</html>