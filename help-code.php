/*rigster custom logo*/
<?php 
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
?>
/*where you whant theme logo */
 <?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<img src="<?php echo $image[0]; ?>" alt="">


/*end custom logo*/


UPDATE `db_frtireking`.`wp_users` SET `user_pass`=MD5('Admin123#') WHERE  `ID`=1;



<input type="file" name="" capture="user" accept="image/">


<style type="text/css">
header .logo img {
    position: relative;
    top: 35px;
     animation: logo_scale 2s ease-in-out infinite;
}

@keyframes logo_scale {
    0%   { transform: scale(1); }
    50%  { transform: scale(1.1); }
    100% { transform: scale(1); }
  }


  .newBtn:hover .newBtnRow img {
    animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
}
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
} 


/*Infinite Rotation*/
.strategyImg img.str-img2 {
  -webkit-animation-duration: 20s;
  animation-duration: 20s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-name: rotation;
  animation-name: rotation;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  /*transform-origin: right center;*/
}

@keyframes rotation {
  from {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }

  to {
    -webkit-transform: rotate3d(0, 0, 1, 360deg);
    transform: rotate3d(0, 0, 1, 360deg);
  }
}
</style>



SMTP Username:
AKIAZM6PGMXINIYWTZPW
SMTP Password:
BNgNNnhGSQ5UrnHoTTaCwvuvKta8ep9a/9Jv3bCwABpG



_dmarc

v=DMARC1; p=none; fo=1; rua=mailto:sales@customboxesweb.com





<?php

// <!-- Proper Custom Post Type Initialization -->

function create_gallery_cpt() {

	$labels = array(
		'name' => _x( 'Gallery', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Gallery', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Gallery', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Gallery', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Gallery Archives', 'textdomain' ),
		'attributes' => __( 'Gallery Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Gallery:', 'textdomain' ),
		'all_items' => __( 'All Gallery', 'textdomain' ),
		'add_new_item' => __( 'Add New Gallery', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Gallery', 'textdomain' ),
		'edit_item' => __( 'Edit Gallery', 'textdomain' ),
		'update_item' => __( 'Update Gallery', 'textdomain' ),
		'view_item' => __( 'View Gallery', 'textdomain' ),
		'view_items' => __( 'View Gallery', 'textdomain' ),
		'search_items' => __( 'Search Gallery', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Gallery', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Gallery', 'textdomain' ),
		'items_list' => __( 'Gallery list', 'textdomain' ),
		'items_list_navigation' => __( 'Gallery list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Gallery list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Gallery', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'gallery', $args );

}
add_action( 'init', 'create_gallery_cpt', 0 );

// <!-- Proper Custom Post Type Initialization -->



// Custom Post Type Taxonomy//

function wheel_taxonomy() {
    register_taxonomy(
        'wheel_category',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'tire',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Wheels Category', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'wheel',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'wheel_taxonomy');
?>
// Custom Post Type Taxonomy



// Call Taxonomy
<select name="forma" onchange="location = this.value;">
  <option>By Finish</option>
  <?php 
    $terms = get_terms( array(
      'taxonomy' => 'wheel_finish',
      'hide_empty' => false,
  ) );

  foreach ( $terms as $term ) { ?>
    <option value="<?php $term_link = get_term_link( $term );
    echo $term_link;?>"><?php print_r($term->name); ?></option>
    <!-- <option><a href="<?php $term_link = get_term_link( $term );
    echo $term_link;?>"><?php print_r($term->name); ?></a></option> -->
      
  <?php } ?>
</select>


// Call Taxonomy 



// Slider With Post Type Snippet code

<?php ?>
<div class="col-md-12 singleCarSlider">
   <div class="container pl-0 pr-0">
      <div class="slider-container">
         <div class="blog-slider-trigger">
            <?php query_posts( array('post_type'  => 'post','posts_per_page' => -1,'order' => 'DESC') );?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
               <div class="teamContent">                  
                  <div class="row teamContentRow">
                     <div class="col-md-3 blogImg">
                        <img class="item-slick" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Alt">
                        <div class="dateAlign">
                           <span><?php echo get_the_date('j'); ?></span>
                           <span><?php echo get_the_date('M'); ?></span>                           
                        </div>
                     </div>                                        
                     <div class="col-md-7 teamContentMain">
                        <img class="item-slick" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Alt">
                        <h5><?php echo get_the_title(); ?></h5>
                        <h6>By: <?php echo get_the_author(); ?></h6>
                        <p><?php echo get_the_content() ?></p>
                        <div class="sameBtn">                           
                           <a href="#">READ MORE</a>
                        </div>
                     </div> 
                  </div>                   
               </div>   
            
            <?php endwhile; else: ?>
            <?php endif; wp_reset_query(); ?>
         </div>
         
         <div class="blogCount"></div>
         
      </div>
   </div>                        
</div>



<!-- // Slider With Post Type Snippet code -->



<!-- Two Joined Slider With post type -->
  <?php ?>
  <div class="col-md-12 singleCarSlider">
     <div class="container pl-0 pr-0">
        <div class="slider-container">

           <div class="slider-nav"> 
               <?php query_posts( array('post_type'  => 'testimonials','posts_per_page' => -1,'order' => 'DESC') );?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?> 
                 <div class="imgTestDiv">
                    <img class="item-slick" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Alt">
                 </div>
                 
              <?php endwhile; else: ?>
              <?php endif; wp_reset_query(); ?>
           </div>


           <div class="slider-for">
              <?php query_posts( array('post_type'  => 'testimonials','posts_per_page' => -1,'order' => 'DESC') );?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
                 <div class="teamContent">
                    <div class="row">
                       <div class="col-md-2"></div>                     
                       <div class="col-md-8 text-center">
                          <p><?php echo get_the_content() ?></p>
                       </div>    
                       <div class="col-md-2"></div>
                    </div>
                    <div class="row">   
                       <div class="col-md-12 text-center mt-2">
                          <h5><?php echo get_the_title(); ?></h5>
                          <p class="designationClass"><?php echo get_field('designation') ?></p>
                       </div>                             
                    </div>   
                 </div>   
              
              <?php endwhile; else: ?>
              <?php endif; wp_reset_query(); ?>
           </div>
           <div class="sliderCount"></div>
           
           
        </div>
     </div>                        
  </div>
  ?>


<!-- Two Joined Slider With post type -->

 jQuery(function() { 
  // Card's slider
  var $carousel = jQuery('.slider-for');
  
    $carousel
      .slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,              
        adaptiveHeight: true,
        infinite: true,                 
        cssEase: 'linear',                
    pauseOnHover:true,
        asNavFor: '.slider-nav'
      })
      
    jQuery('.slider-nav').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: true,
      arrows:false,
      cssEase: 'linear',      
      centerPadding: '60px',      
      focusOnSelect: true,
      infinite: true,  
      dragable: false, 
      fade: true,   
      variableWidth: true
    });

  });


<!-- Two Joined Slider With post type -->



----------------------------------------------------
               Custom Post Type
-------------------------------------------------------
<?php 

function knowledge() {
  register_post_type( 'knowledge_center',
    array(
      'labels' => array(
        'name' => __( 'Knowledge Center' ),
        'singular_name' => __( 'Knowledge Center' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail',),
      // 'rewrite' => array('slug' => 'knowledge-center'),
      'taxonomies'  => array( 'category' ),      
    )
  );
}
add_action( 'init', 'knowledge' );

?>

----------------------------------------------------
         Call Custom Post Type
----------------------------------------------------
<?php
    $args = array(
        'post_type' => 'knowledge_center',
        'post_status' => 'publish',
        'orderby'=>'title',
        'order' => 'ASC',
        'category_name' => 'glossary',
        'posts_per_page' => -1
    );

    $query = new WP_Query($args);
    if ($query->have_posts()):while ($query->have_posts()):$query->the_post();
        $postMeta = get_post_custom($query->ID);
        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        add_filter('excerpt_length', function ($length) {
        return 30;
    });
?>

----------------------------------------------------
         Craete Sidebar
----------------------------------------------------
<?php 
function pacitup_widgets_init() {
   register_sidebar( array(
      'name'          => esc_html__( 'Sidebar', 'pacitup' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here.', 'pacitup' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
   ) );
}
add_action( 'widgets_init', 'pacitup_widgets_init' );

?>
------------------------------------------------------------------------------
         Change Woocommerce order button on Checkout
-------------------------------------------------------------------------------
<?php
add_filter( 'woocommerce_order_button_text', 'woo_custom_order_button_text' ); 

function woo_custom_order_button_text() {
    return __( 'CHECKOUT', 'woocommerce' ); 
}

add_filter( 'woocommerce_checkout_fields' , 'misha_labels_placeholders', 9999 );
?>
-------------------------------------------------------------------------------
         Change Checkout Fields names
-------------------------------------------------------------------------------
<?php 
function misha_labels_placeholders( $f ) {
 
  // first name can be changed with woocommerce_default_address_fields as well
  $f['billing']['billing_state']['label'] = 'State';
  
 
  return $f;
 
}
?>
-------------------------------------------------------------
         Social Sharing Short code
--------------------------------------------------------------
<?php 
function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function wpvkp_social_buttons($content) {
    global $post;
    if(is_singular() || is_home()){
    
        // Get current page URL 
        $sb_url = urlencode(get_permalink());
 
        // Get current page title
        $sb_title = str_replace( ' ', '%20', get_the_title());
        
        // Get Post Thumbnail for pinterest
        $sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());
 
        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;via=wpvkp';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
        $bufferURL = 'https://bufferapp.com/add?url='.$sb_url.'&amp;text='.$sb_title;
        $whatsappURL = 'whatsapp://send?text='.$sb_title . ' ' . $sb_url;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;

       if(!empty($sb_thumb)) {
            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
        }
        else {
            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;description='.$sb_title;
        }
 
        // Based on popular demand added Pinterest too
        $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
        $gplusURL ='https://plus.google.com/share?url='.$sb_title.'';
 
        // Add sharing button at the end of page/page content
        $content .= '<div class="social-box"><div class="social-btn">';
        $content .= '<a class="col-1 sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow"><span>Share on twitter</span></a>';
        $content .= '<a class="col-1 sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow"><span>Share on facebook</span></a>';
        $content .= '<a class="col-2 sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow"><span>WhatsApp</span></a>';
        $content .= '<a class="col-2 sbtn s-googleplus" href="'.$googleURL.'" target="_blank" rel="nofollow"><span>Google+</span></a>';       
        $content .= '<a class="col-2 sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow"><span>LinkedIn</span></a>';        
        $content .= '</div></div>';
        
        return $content;
    }else{
        // if not a post/page then don't include sharing button
        return $content;
    }
};
// Enable the_content if you want to automatically show social buttons below your post.

 add_filter( 'the_content', 'wpvkp_social_buttons');

// This will create a wordpress shortcode [social].
// Please it in any widget and social buttons appear their.
// You will need to enabled shortcode execution in widgets.
add_shortcode('social','wpvkp_social_buttons');

?>

-------------------------------------------------------------
         Call Blog Post
--------------------------------------------------------------


<?php
  $lastposts = get_posts( array(
      'posts_per_page' => 4,
      'order' => 'DESC',
      'category_name' => 'all'
  ) );

  if ( $lastposts ) {
      foreach ( $lastposts as $post ) :
          setup_postdata( $post ); ?>
            <div class="col-md-3">
                <div class="img-box">
                    <a href="<?php the_permalink(); ?>">
                          <?php
                            $fetchImagSmall = wp_get_attachment_image_src(get_post_thumbnail_id() , 'blog-image');
                          ?>

                          <img style="width: 100%;" src="<?php echo $fetchImagSmall[0]; ?>" alt="post-image" style="" alt="" />
                       
                    <div class="text-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            </div>
        <?php
            wp_reset_postdata();
        endforeach;
        }
    ?>


-------------------------------------------------------------
         Call Post Category Name
--------------------------------------------------------------


    <?php
          $categories = get_categories();
            foreach($categories as $category) {
               echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
            }

         ?>


-------------------------------------------------------------
         Create Shortcode
--------------------------------------------------------------
<?php
add_shortcode( 'home_page_product_shortcode', 'home_page_product_shortcode_function' ); 

function home_page_product_shortcode_function($atts, $content = null){ 

    $html = '
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <section class="ServicesSection goodness-section-2"> 
       <div class="row">'; 

           $args = array(                           
             'post_type'   => 'juice_flavour', 
             'post_status' => 'publish',
             'post_per_page' => 6, 
             // Order & Orderby Parameters 
             'order'               => 'DESC', 
             'orderby'             => 'date', 

           ); 


         $query = new WP_Query( $args ); 
         if($query->have_posts()):while($query->have_posts()): $query->the_post(); 
           $Title = get_the_title(); 
           $Descp = get_field('product_description'); 
           $image_url = wp_get_attachment_url( get_post_thumbnail_id() );
           $product_url=get_the_permalink();
           $html .= '<div class="col-md-3 box-1 productBox excerptAlign"> 
             <div class="SerVBx"> 
               <div class="product-bg ImgSeC" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.6)),url('.$image_url.')">  
                  <div class="DescriptionSec text-1"> 
                    <h3>'.$Title.'</h3> 
                    <p>'.$Descp.'</p> 
                  </div> 
                  <a href="'.$product_url.'">Read <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></a>
               </div> 
             </div> 
         </div>'; 
         endwhile; 
         endif;   
     $html .='  </div> 
   </section>'; 

  return $html; 

    wp_reset_query(); 

    wp_reset_postdata(); 

}?>

-------------------------------------------------------------
      Woocomerce product variation details
--------------------------------------------------------------

<?php
  $args1=array(
  'post_type'     => 'product',
  'tax_query' => array(
    'relation' => 'AND',
    array(
        'taxonomy' => 'product_cat',
        'field' => 'slug',
        'terms' => 'kit-products'
    ),                    
  ),
  'status'        => 'publish',
  'order'         => 'DESC',                
  'posts_per_page' => 3
  );

  $query = new WP_Query($args1);
  $i=0;
  if($query -> have_posts()):while ($query -> have_posts()):$query ->the_post(); 
    $variationsP = $product->get_available_variations(); 
    $i++;

    $handle=new WC_Product_Variable(get_the_ID());

    $variations1=$handle->get_children();
    global $product;
        if($product->is_type('variable')) {
            $pid = $product->id;

            $args = array(
                'post_type' => 'product_variation',
                'post_status' => 'publish',
                'numberposts' => -1,
                'orderby' => 'menu_order',
                'order' => 'asc',
                'post_parent' => $pid
            );

            $variations = get_posts( $args );

            $variation_prices = array();

            foreach($variations as $key => $obj) {
                $variation_prices[]= get_post_meta( $obj->ID, '_regular_price', true);
            }
            // $variation_prices[] = $var_Price;
            // echo $var_Price;
            

        } else {

            $sale_price = get_post_meta( get_the_ID(), '_price', true);
            echo '$' . $sale_price;
            
        }
    
    ?>

    <?php
        endwhile;
        endif;
        wp_reset_postdata();
     ?> 

----------------------------------
Custom Attibute Call
----------------------------------

<?php
global $product;
$koostis = $product->get_attribute( 'pa_koostis' );


?>

----------------------------------
Get Product Specific category
----------------------------------

<ul class="products">
    <?php
        $args = array( 
          'post_type' => 'product',
          'posts_per_page' => 1, 
          'product_cat' => 'wheels', 
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

            <h2>Shoes</h2>

                <li class="product">    

                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

                        <h3><?php the_title(); ?></h3>

                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

                    </a>

                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul><!--/.products-->


----------------------------------
Add Pagination on custom post type
----------------------------------

<div class="row productRow">
     <?php
          $args = array( 
            'post_type' => 'product',
            'posts_per_page' => 10, 
            'product_cat' => 'wheels', 
            // 'posts_per_page' => get_option('to_count_portfolio'),
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1 
          );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="col-md-6 productMainCol">         
          <div class="row productsubRow">           
            <div class="col-md-6 product_img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
            <div class="col-md-6 product_detail">
              <h4><?php echo get_the_title(); ?></h4>
              <p><?php echo get_field('tire_size') ?></p>             
              <div class="product_price">
                <?php                 
                  echo $product->get_price_html();
                 ?>
              </div>
              <!-- <span class="msrp">MSRP <?php echo wc_price(get_field('msrp')) ?></span>
              <span class="savePrice">You Saved <span>227.04 (15%)</span></span> -->
               
               <div class="BtnSetting">
                <?php echo do_shortcode("[ti_wishlists_addtowishlist loop=yes]"); ?>
                <a href="<?php echo get_the_permalink(); ?>" class="readMoreBtn">Read More</a>
               </div>
            </div>
          </div> 
              </div>
            <?php endwhile; ?>
            <div class="shopPagination">
            <?php
        $big = 999999999; // need an unlikely integer
         echo paginate_links( array(
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $loop->max_num_pages
        ) );
      ?>
      </div>
        <?php wp_reset_query(); ?>
  </div>


-------------------------------------------------------------
      Show  Filter Post with multiple Taxnomies
--------------------------------------------------------------

<?php
$args = array(
    'post_type' => 'post',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'movie_genre',
            'field'    => 'slug',
            'terms'    => array( 'action', 'comedy' ),
        ),
        array(
            'taxonomy' => 'actor',
            'field'    => 'term_id',
            'terms'    => array( 103, 115, 206 ),
            'operator' => 'NOT IN',
        ),
    ),
);
$query = new WP_Query( $args );

?>

<!-- Cache Remove style -->
<?php
  $theme = wp_get_theme();
  $ver = $theme->get( 'Version' );
  $themecsspath = get_stylesheet_directory() . '/style.css';
  $style_ver = filemtime( $themecsspath );
  wp_enqueue_style( 'theme-style', get_stylesheet_uri(),array(),$style_ver );

?>
<!-- Cache Remove style -->


<!-- Contact Form 7 email sent action -->

<script type="text/javascript">
 
    var wpcf7Elm = document.querySelector( '.wpcf7' ); 
    wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
       if ( '3477' == event.detail.contactFormId ) {
      
      
     location.href='<?php echo site_url(); ?>/checkout/?add-to-cart='+getPriceVal;
    }
     
    }, false );   

  
</script>

<!-- Contact Form 7 email sent action -->



<!-- AJAX URL WOrdpress -->

<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>

<!-- AJAX URL WOrdpress -->


<?php

// For Adding Fancy Editor In Cloudfront

add_filter( 'user_can_richedit', function( $wp_rich_edit ) {
    if ( !$wp_rich_edit
         && ( get_user_option( 'rich_editing' ) == 'true' || !is_user_logged_in() )
         && isset( $_SERVER[ 'HTTP_USER_AGENT' ] )
         && stripos( $_SERVER[ 'HTTP_USER_AGENT' ], 'amazon cloudfront' ) !== false
    ) {
        return true;
    }

    return $wp_rich_edit;
} );

// For Adding Fancy Editor In Cloudfront




// remove blog from post type url

'rewrite' => array(
      'with_front' => false
      ),

// remove blog from post type url
 ?>



<!-- Related Blog Loop -->

<?php

$related = get_posts( array( 
  'category__in' => wp_get_post_categories($post->ID), 
  'numberposts' => 5, 
  'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
 <ul> 
        <li>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <?php the_content('Read the rest of this entry &raquo;'); ?>
        </li>
    </ul>   
<?php }
wp_reset_postdata(); ?>


<!-- Related Blog Loop -->





/** 
 * Enables the HTTP Strict Transport Security (HSTS) header in WordPress. 
 */
function tg_enable_strict_transport_security_hsts_header_wordpress() {
    header( 'Strict-Transport-Security: max-age=10886400' );
}
add_action( 'send_headers', 'tg_enable_strict_transport_security_hsts_header_wordpress' );



<!-- AWS CMDs -->

enable permalink updated

sudo a2enmod rewrite
sudo systemctl restart apache2

<!-- AWS CMDs -->




<!-- Plugin install Wp-config permission -->

define('FS_METHOD', 'direct');

<!-- Plugin install Wp-config permission -->

 <!-- Allow Webp File upload -->

define('ALLOW_UNFILTERED_UPLOADS', true);

 <!-- Allow Webp File upload -->



<!-- Redirection From Page to page -->
Redirect 301 /company-history.php       https://usawheelstires.com/about-us

<!-- Redirection From Page to page -->




<!-- Active Menu Class -->
<script type="text/javascript">
  var current = window.location.href;
      console.log(current);
      jQuery('#site-navigation #primary-menu li a').each(function(){
          var $this = jQuery(this);                 
          if($this.attr('href') == current){
              $this.addClass('MenuActive');   
          }
      })   
      jQuery('#menu-quick-links li a').each(function(){
          var $this = jQuery(this);                 
          if($this.attr('href') == current){
              $this.addClass('MenuActive');   
          }
      })    
</script>
<!-- Active Menu Class -->


<!-- call builder custome page -->
<div>
    <?php while ( have_posts() ) : the_post();
        the_content();
    ?>
    <?php
    endwhile; // End of the loop.?>
</div>
