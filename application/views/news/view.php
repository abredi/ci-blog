<div class="row">
  <div class="col-10 col-sm-8 mx-auto py-2">
    <div class="card">
      <div class="card-body pb-0">
        <h5 class="card-title"><?php echo $news_item['title']; ?></h5>
        <p class="card-text">
          <?php echo $news_item['text']; ?>
        </p>
        <div class="card-footer center">
          <a href="<?php echo site_url('news/edit/' . $news_item['slug']); ?>" class="edit card-link">Edit</a>
          <a href="<?php echo site_url('news/remove/' . $news_item['slug']); ?>" class="card-link danger">Delete</a>
        </div>
      </div>
    </div>
  </div>
</div>