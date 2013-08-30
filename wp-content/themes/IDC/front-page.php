<?php get_header(); ?>

<div class="row">
  <div class="large-12 columns large-centered pad-top">

<div class=center>

        
    </div>
    <div class="slideshow-container">
      <div class="cycle-slideshow" data-cycle-slides=".slideshow" data-cycle-speed="1000" data-cycle-prev="#prev" data-cycle-next="#next">
        <!-- <span id="next"><img src="images/prev.jpg" alt=""></span>
        <span id="prev"><img src="images/next.jpg" alt=""></span> -->
<?php $thumbnails = get_posts('numberposts=5');
foreach ($thumbnails as $thumbnail) {
  if ( has_post_thumbnail($thumbnail->ID)) {
    echo '<div class="slideshow">';
    echo '<span id="next">';
    echo '</span>';
    echo '<span id="prev">';
    echo '</span>';
    echo '<div class="large-8">';
    echo '<a href="' . get_permalink( $thumbnail->ID ) . '" title="' . esc_attr( $thumbnail->post_title ) . '">';
    echo get_the_post_thumbnail($thumbnail->ID, 'featured');
    echo '</div>';
    echo '<div class="large-4 slideshow-cap">';
    echo '<span class="slideshow-title">' . ($thumbnail->post_title) . '</span>';
    echo '<span class="slideshow-excerpt">' . ($thumbnail->post_excerpt) . '</span>';
        echo '</a>';
    echo '</div>';
    echo '</div>';
    }
  }
?>
      </div>
    </div>
  </div>
</div>
    
<div class="row">
  <div class="large-12 column">
    <div class="large-12 columns no-pad info push-12">
      <div class="large-4 columns action top no-pad">
        <h2 class="center top">Donate</h2>
          <div class="blockquote">
            <p><?php the_field('donate'); ?></p>
          </div>
      </div>

      <div class="large-4 columns action top no-pad">
        <h2 class="center top">Join IDC</h2>
        <blockquote class="center quote">
          <p><?php the_field('join_idc'); ?></p>
        </blockquote>
      </div>

      <div class="large-4 columns action top no-pad">
        <h2 class="center top">Sponsor</h2>
          <blockquote class="center quote">
            <p><?php the_field('sponsor'); ?></p>
          </blockquote>
        </div>
      </div>

      <div class="large-12 columns no-pad blogs pull-12">
      <?php $the_query = new WP_Query( 'showposts=2' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="post-container">
          <div class="large-4 columns title">
            <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <h4 class="post-date">Date posted: <?php the_date(); ?></h4>
          </div>
          <div class="large-8 columns blog">
            <?php the_excerpt(__('(more…)')); ?>
          </div>
        </div> 
        <?php endwhile;?>
      </div>
  </div>
</div>

        

<?php get_footer(); ?>