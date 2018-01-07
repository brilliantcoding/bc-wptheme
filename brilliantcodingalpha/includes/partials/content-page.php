<?php
/**
 * The content block that appears on pages
 *
 * @package Brilliantcoding
 */
?>
<?php $data = get_query_var( 'template_data' ); ?>

<?php $post = $data['posts'][0]; ?>

<!-- Facebook setup script -->
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- post-single-article -->
<div class="blog-content bc-content">
  <div class="container">
    <article id="post-<?php echo $post['id']; ?>" class="h-entry row mt-5 bc-post-article">
      <div class="col-md-12 text-md-left text-center ml-3 pb-5 bc-border">

        <h2 class="p-name"><?php echo $post['title'] ?></h2>
        <?php if ( $post['tags_list'] ): ?>
          <div class="clearfix"><?php echo $post['tags_list'] ?></div>
        <?php endif; ?>
        <?php if ( $post['published_date_ISO8601'] && $post['published_date'] ): ?>
          <span><?php echo __('Posted on:', 'brilliantcoding'); ?></span>
          <span class="clearfix">
            <time class="dt-published" datetime="<?php echo $post['published_date_ISO8601']; ?>">
              <?php echo $post['published_date']; ?>
            </time>
          </span>
        <?php endif; ?>
        <?php if ( $post['modified_date_ISO8601'] && $post['modified_date'] ): ?>
          <span><?php echo __('Last modified:', 'brilliantcoding'); ?></span>
          <span class="clearfix">
            <time class="dt-updated" datetime="<?php echo $post['modified_date_ISO8601']; ?>">
              <?php echo $post['modified_date']; ?>
            </time>
          </span>
        <?php endif; ?>
        <?php if ( $post['author'] && $post['author_posts_url'] ): ?>
          <span><?php echo __('Published by:', 'brilliantcoding'); ?></span>
          <span class="clearfix">
            <a class="p-author h-card" href="<?php echo $post['author_posts_url'] ?>">
              <?php echo $post['author']; ?>  
            </a>
          </span>
        <?php endif; ?>


        <div class="e-content">
          <?php echo $post['content'] ?>
        </div>


      </div>
      <a id="bc-skippy" class="sr-only sr-only-focusable" href="<?php echo $post['permalink']; ?>">
        <span class="bc-skiplink-text"><?php echo $post['title']; ?></span>
      </a>

    </article>
  </div>
</div>