<?php
/**
 * The content block for social networking buttons
 *
 * @package Brilliantcoding
 */
?>

<?php $data = get_query_var( 'template_data' ); ?>


<span class="twitter-button">
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $post['tinyurl'] ?>" data-via="<?php  echo $data['theme']['mod_socialtwitter']; ?>">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</span>

<span class="facebook-button" style="display: inline-block;">
<div class="fb-share-button" data-href="<?php echo $post['permalink']" ?>" data-layout="button" >-</div>
</span>

<span class="googleplus-button">
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-annotation="none" data-href="<?php echo $post['permalink']" ?>
</div>
</span>

