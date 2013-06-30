<?php
/**
 * The sidebar containing the main widget area.
 *
 */
?>

    <article class="sidebar">

        <ul>
            <?php

            /*
            * Contact block
            */
            $custom_fields = get_post_custom($post->ID);
            if (isset($custom_fields[dbt_checkbox_sidebarblock_b1][0]) && $custom_fields[dbt_checkbox_sidebarblock_b1][0] == True) :

                // query_posts( array('post_type' => 'page', 'p' => 1677));
                query_posts(array('post_type' => 'over-yes', 'showposts' => 1, 'p' => 1734, 'orderby' => 'menu_order'));
                while (have_posts()) : the_post();

                echo '<li class="box box-contact">';

                    $titleText = get_post_meta($post->ID, 'dbt_titleText', true);
                    if ($titleText == true) {
                        echo '<header><h4>' . $titleText . '</h4></header>';
                    } else {
                        echo '<header><h4>'.get_the_title().'</h4></header>';
                    }

                the_content();
                echo '</li>';

                endwhile;
                wp_reset_query();

            else:
            // geen contact gegevens tonen
            endif;

            /*
            * Child pages list
            */

            if (isset($custom_fields[dbt_checkbox_sidebarblock_b3][0]) && $custom_fields[dbt_checkbox_sidebarblock_b3][0] == True) :

                echo '<li class="box box-button active">';
                echo '<p class="box-title">'.get_the_title().'</p>';
                echo '</li>';

                    $this_page_id = $post->ID;
                    query_posts(array('showposts' => -1, 'post_parent' => $this_page_id, 'post_type' => 'page', 'orderby' => 'menu_order'));

                    if (have_posts()) {
                        while ( have_posts() ) : the_post();
                            echo '<li class="box box-button box-button-page"><a href="' . get_permalink($post->ID) . '" title="'.get_the_title().'">'.get_the_title().'</a></li>';
                        endwhile;
                    } else {
                        echo '<li><p>Deze pagina heeft geen sub-pagina.</p></li>';
                    }
                    wp_reset_query();

            else:

            endif;

            /*
            * Taxonomy child posts
            */

            $custom_fields = get_post_custom($post->ID);
            if (isset($custom_fields[dbt_checkbox_sidebarblock_b2][0]) && $custom_fields[dbt_checkbox_sidebarblock_b2][0] == True) :
                // no side menu if checkbox 2 is active
            else:

            $post_type = get_post_type_object( get_post_type($post) );
            $taxonomyNiceName = $post_type->labels->name;
            $taxonomyName = $post_type->name;
            $taxonomyPermalink = $post_type->cap->read_post;

            /* page id's
             *
             * producten = 1289
             * service = 1291
             * BP worden = 1292
             * Over yes = 1293
            */

            if(is_page( 1289 )) {
                $postType = 'product';

                echo '<li class="box box-button active">';
                echo '<p class="box-title">Producten</p>';
                echo '</li>';

            } else if(is_page( 1291 )) {
                $postType = 'service';

                echo '<li class="box box-button active">';
                echo '<p class="box-title">Services</p>';
                echo '</li>';

            } else if(is_page( 1292 )) {
                $postType = 'business-partner';

                echo '<li class="box box-button active">';
                echo '<p class="box-title">Business partners</p>';
                echo '</li>';

            } else if(is_page( 1293 )) {
                $postType = 'over-yes';

                echo '<li class="box box-button active">';
                echo '<p class="box-title">Over Yes Telecom</p>';
                echo '</li>';

            } else if(is_page()) {

                $postType = 'product';

                echo '<li class="box box-button active">';
                echo '<p class="box-title">Producten</p>';
                echo '</li>';

            } else if(is_front_page()) {


            } else {
                $postType = $taxonomyName;

                echo '<li class="box box-button active">';
                echo '<p class="box-title">'.$taxonomyNiceName.'</p>';
                echo '</li>';

            }

            $thisPostId = get_the_ID();

                /* page id's
                 *
                 * verkooppunten = 1454
                 * business partner worden = 1681
                 * mobile device management = 1640
                */

                $idBoxButtonPage_1 = 1454;
                $idBoxButtonPage_2 = 1681;
                $idBoxButtonPage_3 = 1640;

            echo '<li class="box box-list">';
            echo '<ul class="styleType-circle-box-list">';

                    query_posts('post_type='.$postType.'&order=ASC&post_parent=0&orderby=menu_order');
                    while ( have_posts() ) : the_post();

                        if (get_the_ID() == $thisPostId) {
                            echo '<li class="active">';
                        } else {
                            echo '<li>';
                        }
                        echo '<a href="' . get_permalink($post->ID) . '" title="'.get_the_title().'">'.get_the_title().'</a></li>';

                    endwhile;
                    wp_reset_query();

            echo '</ul>';
            echo '</li>';

            echo '<li class="box box-button highlight">';
            echo '<a class="sellingPoint" href="'. get_permalink( $idBoxButtonPage_1 ) .'" title="'. get_the_title( $idBoxButtonPage_1 ) .'">'. get_the_title( $idBoxButtonPage_1 ) .'</a>';
            echo '</li>';

            echo '<li class="box box-button">';
            echo '<a class="BP" href="'. get_permalink( $idBoxButtonPage_2 ) .'" title="'. get_the_title( $idBoxButtonPage_2 ) .'">'. 'Businesspartner worden?' .'</a>';
            echo '</li>';

            echo '<li class="box box-button">';
            echo '<a class="mobileDeviceManagement" href="'. get_permalink( $idBoxButtonPage_3 ) .'" title="'. get_the_title( $idBoxButtonPage_3 ) .'">'. get_the_title( $idBoxButtonPage_3 ) .'</a>';
            echo '</li>';

            // custom if loop
            endif;

            /*
            * Important documents page link
            */

            /* page id's
             * documenten = 1642
             */

            $idBoxButtonPage_4 = 1642;

            if (isset($custom_fields[dbt_checkbox_sidebarblock_b4][0]) && $custom_fields[dbt_checkbox_sidebarblock_b4][0] == True) :

                echo '<li class="box box-button">';
                echo '<a class="documenten" href="'. get_permalink( $idBoxButtonPage_4 ) .'" title="'. get_the_title( $idBoxButtonPage_4 ) .'">'. get_the_title( $idBoxButtonPage_4 ) .'</a>';
                echo '</li>';

            else:

            endif;

            ?>

        </ul>

    </article>
