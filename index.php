<?php get_header(); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
    
      
      <article class="post" id="<?php the_title(); ?>">
        <h1>
          <a id="home" rel="home" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
          <a href="<?php the_permalink(); ?>">/<?php the_title();?></a>
          <small>
            by <?php the_author(); ?>
            on <?php the_date(); ?>
          </small>
        </h1>
  
        <?php the_content(); ?>
      </article>
      
      <?php endwhile; else: ?>

      <p>Sorry, no posts matched your criteria.</p>
      
      <!-- REALLY stop The Loop. -->
      <?php endif; ?>
      
<?php get_footer(); ?>