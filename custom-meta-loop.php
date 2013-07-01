<?php
$custom_fields = get_post_custom($post->ID);
echo '<div id="accordion">';

$i = 0;
for($i = 0; $i < 11; $i + 1) {
    $i++;

    // Title
    if ($custom_fields[dbt_titleText_b.$i][0] == True) :
        echo '<h3>'.$custom_fields[dbt_titleText_b.$i][0].'</h3>';
    endif;

    if (($custom_fields[dbt_titleText_b.$i][0] == False) && ($custom_fields[dbt_shortCode_b.$i][0] == True)) :
        echo '<h3 class="empty">&nbsp;</h3>';
    endif;

    // Check which background the div must have
    if ($custom_fields[dbt_checkbox_b.$i][0] == True) {
        echo '<div class="transparentBg">';
    } else if(($custom_fields[dbt_titleText_b.$i][0] == False) && ($custom_fields[dbt_shortCode_b.$i][0] == True)) {
        echo '<div class="single-top-margin">';
    } else {
        echo '<div>';
        // echo '<div class="filler"><p>&nbsp;</p></div>';
    }

    // Textbox
    if ($custom_fields[dbt_textBox_b.$i][0] == True) :
        echo '<p>'.$custom_fields[dbt_textBox_b.$i][0].'</p>';
    endif;

    // Shortcode (forms)
    if ($custom_fields[dbt_shortCode_b.$i][0] == True) :
        $shortcode = $custom_fields[dbt_shortCode_b.$i][0];

        echo do_shortcode( $shortcode );
    endif;

    // Button
    if ($custom_fields[dbt_buttonUrl_b.$i][0] == True) :
        $buttonUrl = $custom_fields[dbt_buttonUrl_b.$i][0];
        $buttonTitle = $custom_fields[dbt_buttonTekst_b.$i][0];
        echo '<a class="tekst-button accordionbutton" href="'.$buttonUrl.'" title="'.$buttonTitle.'">'.$buttonTitle.'</a>';
    endif;

    // Textbox
    if ($custom_fields[dbt_textBox_small_b.$i][0] == True) :
        echo '<p><small>'.$custom_fields[dbt_textBox_small_b.$i][0].'</small></p>';
    endif;

    echo '</div>';

}

echo '</div>'; // end #accordion
?>
