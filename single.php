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
      
      <h4><a id="reactionsbutton" onclick="toggleReactions('reactionsbutton', 'reactions')" toggledtext="hide reactions">show reactions</a></h4>
      
      <div id="reactions" style="display: none; ">

        <?php comments_template( '', true ); ?>      
      </div>

<?php get_footer(); ?>
