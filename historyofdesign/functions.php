<?php
function postimage($size=full,$num=-1,$lighbox=0) {
  if ( $images = get_children(array(
    'post_parent' => get_the_ID(),
    'post_type' => 'attachment',
    'numberposts' => $num,
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'post_mime_type' => 'image',)))
  {
    foreach( $images as $image ) {
      $attachmenturl=wp_get_attachment_url($image->ID);
      $attachmentimage=wp_get_attachment_image($image->ID, $size );
      $img_title = $image->post_title;
      $img_desc = $image->post_excerpt;
      $alt = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
      echo 
      '<li class="jItem">
        '.$attachmentimage.'
      </li>';
    }
  } else {
    echo "No Image";
  }
}
?>