<?php
/*
Template Name: Fullwidth Page
*/
?>
<?php get_header(); ?>
<!--Start Content Wrapper-->
<div class="grid_24 content_wrapper">
  <div class="fullwidth-page">
    <?php //if (function_exists('inkthemes_breadcrumbs')) inkthemes_breadcrumbs(); ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <h1>
      <?php the_title(); ?>
    </h1>
    <?php the_content(); ?>
    <?php endwhile;?>
  </div>
</div>
<!--End Content Wrapper-->
<div class="clear"></div>
</div>
<!--End Container-->
<?php get_footer(); ?>




<?php
                                    $terms = get_terms( array(
                            'taxonomy' => 'category',
                            'hide_empty' => false,
 ) );?>
<?php $meta_image = get_wp_term_image($terms[0]->term_id); ?> 
<!--end slider-->
<div class="index-container first_featured" <?php body_class(); ?> style="<?php if (get_option('inkthemes_bodybg') != '') { ?>background:url(<?php echo get_option('inkthemes_bodybg'); ?>)<?php
}
?>" >
    <div class="container_24">
        <div class="grid_24">
            <div class="feature-index">
                    <div class="grid_10 alpha">
                        <div class="feature_left_cat">
                             <!-- //It will give category/term image url 
                            //var_dump($meta_image); -->
                            <div class="cat_left_img_wrap">
                                <img class="cat_left_img" src="<?php echo $meta_image ?>" alt="">
                                <h3 class="cat_left_desc"><?php echo $terms[0]->description ?></h1>
                            </div>
                            <!-- echo '<img src="'.$meta_image.'"/><br>';
                            // echo '<h1>'.$terms[0]->name.'</h1>';
                            echo '<h1>'.$terms[0]->description.'</h1>'; --> 
                        </div>
                                  
                    </div>

                    <div class="grid_14 omega">
                        <div class="feature_right_cat">
                            <div class="grid_24" id="cat_right_first_row">
                                <div class="grid_12 alpha">

                                    <!-- //It will give category/term image url 
                                    //var_dump($meta_image); -->
                                    <div class="cat_right_img_wrap">
                                        <img class="cat_right_img"src="<?php echo $meta_image ?>" alt="">
                                        <h3 class="cat_right_desc"><?php echo $terms[0]->description ?></h1>
                                    </div>
                                    <!-- echo '<img src="'.$meta_image.'"/><br>';
                                    // echo '<h1>'.$terms[0]->name.'</h1>';
                                    echo '<h1>'.$terms[0]->description.'</h1>'; --> 


                                </div>

                                <div class="grid_12 omega">

                                        <!-- //It will give category/term image url 
                                        //var_dump($meta_image); -->
                                        <div class="cat_right_img_wrap">
                                            <img class="cat_right_img"src="<?php echo $meta_image ?>" alt="">
                                            <h3 class="cat_right_desc"><?php echo $terms[0]->description ?></h1>
                                        </div>
                                        <!-- echo '<img src="'.$meta_image.'"/><br>';
                                        // echo '<h1>'.$terms[0]->name.'</h1>';
                                        echo '<h1>'.$terms[0]->description.'</h1>'; --> 


                                    </div>

                                    

                                </div> 

                            
                                <div class="clear"></div>

                                <div class="grid_24">
                                <div class="grid_12 alpha">

                                    <!-- //It will give category/term image url 
                                    //var_dump($meta_image); -->
                                    <div class="cat_right_img_wrap">
                                        <img class="cat_right_img" src="<?php echo $meta_image ?>" alt="">
                                        <h3 class="cat_right_desc"><?php echo $terms[0]->description ?></h1>
                                    </div>
                                    <!-- echo '<img src="'.$meta_image.'"/><br>';
                                    // echo '<h1>'.$terms[0]->name.'</h1>';
                                    echo '<h1>'.$terms[0]->description.'</h1>'; --> 


                                </div>

                                <div class="grid_12 omega">

                                        <!-- //It will give category/term image url 
                                        //var_dump($meta_image); -->
                                        <div class="cat_right_img_wrap">
                                            <img class="cat_right_img" src="<?php echo $meta_image ?>" alt="">
                                            <h3 class="cat_right_desc"><?php echo $terms[0]->description ?></h1>
                                        </div>
                                        <!-- echo '<img src="'.$meta_image.'"/><br>';
                                        // echo '<h1>'.$terms[0]->name.'</h1>';
                                        echo '<h1>'.$terms[0]->description.'</h1>'; --> 


                                    </div>

                                    

                                </div> 


                            </div>
                        
                            


                    </div>        
                    </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
