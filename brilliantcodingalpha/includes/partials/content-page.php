<?php
/**
 * The content block that appears on pages
 *
 * @package Brilliantcoding
 */
?>
<?php $data = get_query_var('template_data');?>

<?php $post = $data['posts'][0];?>
<!-- post-single-article -->
<div class="blog-content bc-content">
  <div class="container">
    <article id="post-<?php echo $post['id']; ?>" class="h-entry row mt-5 bc-post-article">
      <div class="col-md-12 text-md-left text-center ml-3 pb-5">

        <h2 class="p-name"><?php echo $post['title'] ?></h2>
        <div class="pl-2 bc-metadata"></div>

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