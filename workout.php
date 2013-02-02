<?php    
/* Template Name:Workouts  */

get_header(); ?>

                <div id="primary">
                        <div id="content" role="main">

                                <?php while ( have_posts() ) : the_post(); ?>

                                        <?php    // get_template_part( 'content', 'page' ); ?>
<article id="post-<?php   post_class(); ?>>
        <header class="entry-header">
                <h1 class="entry-title"><?php     the_title(); ?></h1>
        </header><!-- .entry-header -->

        <div class="entry-content">
                <?php     the_content(); ?>
                
<?php    
  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
  if ($children) { ?>
  <ul>
  <?php   echo $children; ?>
  </ul>
  <?php   } ?>

        </div><!-- .entry-content -->
        <footer class="entry-meta">
                <?php     edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
</article><!-- #post-<?php        the_ID(); ?> -->



                                        <?php     comments_template( '', true ); ?>

                                <?php     endwhile; // end of the loop. ?>

                        </div><!-- #content -->
                </div><!-- #primary -->

<?php     get_footer(); ?>