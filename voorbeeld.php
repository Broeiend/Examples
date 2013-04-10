<?php

/* ============= WP - Voorbeeld variabele buttons op een Page ============= */

// page id '53' = 'download de brochure' page
$primaryPageId = '53';
$permalink = get_permalink($primaryPageId);
$pageTitle = get_the_title($primaryPageId);
// page id '8' = 'contact' page
$secondaryPageId = '8';
$secondPermalink = get_permalink($secondaryPageId);
$secondPageTitle = get_the_title($secondaryPageId);

// exclude contact link on contact page
if (is_page($secondaryPageId)) {  } else {
    echo '<a href="'. $secondPermalink . '" title="'. $secondPageTitle .'" class="btnLarge secondary">Neem contact met ons op</a>';
}
// exclude download brochure link on download brochure
if (is_page($primaryPageId)) {  } else {
    echo '<a href="'. $permalink . '" title="'. $pageTitle .'" class="btnLarge">Download de brochure</a>';
}

get_sidebar('vacancylist');

/* ============= WP - Voorbeeld meta boxes tonen op een Page ============= */

// Product meta boxes
$productOneImageUrl = get_post_meta($post->ID, 'dbt_productImageOneUrl', true);
$productOneTitle = get_post_meta($post->ID, 'dbt_productOneTitle', true);
$productOneUrl = get_post_meta($post->ID, 'dbt_productOneUrl', true);
$productOneText = get_post_meta($post->ID, 'dbt_productOneText', true);

 if( empty($productOneText) ) :

else:
    echo '<div id="box1" class="three columns">';
    echo '<div class="boxTitle"><h2 class="box-widget-title">'. $productOneTitle .'</h2></div>';
    echo '<div class="boxText">'. $productOneText .'</div>';
    echo '<a class="fullLink" href="'. $productOneUrl .'" title="'. $productOneImageUrl .'">'. $productOneImageUrl .'</a>';
    echo '</div>';
endif;

/* ============= WP - Voorbeeld splitten van de content op een more tag ============= */

// split content at the more tag and return an array
function split_content() {
    global $more;
    $more = true;
    $content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content('more'));
    for($c = 0, $csize = count($content); $c < $csize; $c++) {
        $content[$c] = apply_filters('the_content', $content[$c]);
    }
    return $content;
}

/* ============= WP - Praktisch voorbeeld ============= 
    Divisions onderverdelen in even en odd
    Image ophalen vanuit een custom field template
*/

$args = array (
    'category_name' => 'testimonial',
    'posts_per_page' => 3
); 

$c = 0 ;
query_posts( $args );

?>            
            
<ul id="testimonials">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php 
        $c++;
        if( $c % 2 == 0 ) $extra_class = 'even';
        else $extra_class = 'odd'; 
    ?>               

    <li class="<?php echo $extra_class; ?>">                
        <?php if ( get_post_meta($post->ID, 'image', true) ) : ?>
            <!-- hier komt een id van het plaatje uit -->
            <?php $imageid = get_post_meta($post->ID, 'image', true); ?>
            <!-- hier haal je een url van zon plaatje op waarvan je id hebt opgevraagd -->
            <?php $theImageSrc = wp_get_attachment_url( $imageid ); ?>
            <img src="<?php echo $theImageSrc; ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        <?php the_title(); ?>
    </li>

    <?php endwhile; endif; wp_reset_query(); ?>
            
</ul>

<?php

/* ============= WP - Nog een snippet om een afbreking te maken ============= */

$the_Content = get_the_content();
$numwords = 15;
$shortName = explode(" ", $the_Content);
if (sizeof($shortName) > $numwords) 
    {
    preg_match("/([\S]+\s*){0,$numwords}/", $the_Content, $regs);
    $shortdesc = trim($regs[0]);
    echo"$shortdesc...";
    }
else
    {
    echo $the_Content;
    }   
    
?>