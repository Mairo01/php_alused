<?php require_once APPROOT . '/views/inc/header.php'; ?>
<!-- <h1><?php echo $data['tag']->title ?></h1> -->
<h2>Posts by tag</h2>

<?php foreach ($data['tags'] as $tag): ?>
        <li class="list-group-item">
            <h2><?php echo $tag->title; ?></h2>
            <p><?php echo $tag->content; ?></a>
        </li> <!-- more button -->
        <a href="<?php echo URLROOT ?>/posts/show/<?php echo $tag->post_id; ?>" class="btn btn-info">More</a>
<?php endforeach; ?>
<a href="<?php echo URLROOT ?>/tags" class="btn btn-info">Back</a>
<hr>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
