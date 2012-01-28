<?php get_header(); ?>




      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
      <article class="entry-single" id="<?php echo basename(get_permalink()); ?>">
        <h1 class="title">
          <a class="home" rel="home" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><a class="path" rel="bookmark" href="<?php the_permalink(); ?>">/<?php the_title();?></a>
          <small class="meta">
            by <?php the_author(); ?>
            on <?php the_date(); ?>
          </small>
        </h1>
  
        <?php the_content(); ?>
      </article>
      
      <?php endwhile; else: ?>

      <p>uups... there's nothing to spit out!</p>
      
      <!-- REALLY stop The Loop. -->
      <?php endif; ?>

<?php comments_template( '', true ); ?>      
<?php get_footer(); ?>