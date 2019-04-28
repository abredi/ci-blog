<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-center">
  <h2 style="color: cornsilk;">
    <?php echo $page; ?>
  </h2>
</nav>
<div class="row">
  <div class="col-10 col-sm-8 mx-auto py-2">
    <div class="card">
      <div class="card-body pb-0">
        <div class="text-danger">
          <?php echo validation_errors(); ?>
        </div>
        <?php
        $attributes = array('class' => 'form');
        echo form_open(site_url('news/create')); ?>
        <label for="title">Title</label>
        <input type="input" name="title" value="<?php echo (isset($title)) ? $title : ''; ?>" class="form-control" /><br />
        <label for="text">Text</label>
        <textarea name="text" class="form-control"><?php echo (isset($text)) ? $text : ''; ?></textarea><br />

        <input type="submit" name="submit" class="btn btn-primary" value="Create news item" />

        </form>
      </div>
    </div>
  </div>
</div>