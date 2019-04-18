<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-center">
        <h2 style="font-family: cursive;font-size: 3em;color: cornsilk;"><?php echo $page; ?></h2>
</nav>
<div class="row">
        <?php if ($this->session->flashdata('alert') !== NULL) { ?>
                <div class="col-12">
                        <div class="d-flex justify-content-center alert alert-<?php echo $_SESSION['alert']['type']; ?>" role="alert">
                                <?php echo $_SESSION['alert']['msg']; ?>
                        </div>
                </div>
        <?php } ?>
</div>
<?php foreach ($news as $news_item) : ?>
        <div class="row">
                <div class="col-10 col-sm-8 mx-auto py-2">
                        <div class="card">
                                <div class="card-body pb-0">
                                        <h5 class="card-title"><?php echo $news_item['title']; ?></h5>
                                        <p class="card-text">
                                                <?php echo $news_item['text']; ?>
                                        </p>
                                        <div class="card-footer center">
                                                <a href="<?php echo site_url('news/' . $news_item['slug']); ?>" class="card-link">View</a>
                                                <a href="<?php echo site_url('news/edit/' . $news_item['id']); ?>" class="edit card-link">Edit</a>
                                                <a href="<?php echo site_url('news/remove/' . $news_item['id']); ?>" class="card-link danger">Delete</a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
<?php endforeach; ?>