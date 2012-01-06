<!DOCTYPE html>
<html>
  <head>
  
  <meta charset="utf-8">
  <title>blog.5th.ch/</title>
  
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <!-- <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">-->
  <style type="text/css">
  
  </style>
  
  </head>
  
  <body id="home">
  
    <div class="container">
    
      <header>
        <span class="row">
          <span class="span4 offset12">
            <ul class="nav">
              <li><a href="#">rss</a></li>
              <li><a href="#">impressum</a></li>
            </ul>
          </span>
        </span>
    
      </header>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
    
      
      <article class="post">
        <h1>
          <a id="home" rel="home" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
          <a href="<?php the_permalink(); ?>">/<?php the_title();?></a>
        </h1>
        <?php the_content(); ?>
      </article>
      
      <?php endwhile; else: ?>

      <p>Sorry, no posts matched your criteria.</p>
      
      <!-- REALLY stop The Loop. -->
      <?php endif; ?>
    
    
      <footer>
        <p>© copyright koma5 - Proudly powerd by WordPress - theme daily</p>
      </footer>
    
    </div>
    <!-- /container -->
  </body>
</html>