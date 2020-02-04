<?php

/* @var $this yii\web\View */
/* @var $authors array */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <?php foreach ($authors as $author) : ?>
                
                <h2><?= $author->name; ?></h2>
                <?php if ($author->books) : ?>
                <ul class="list-group">
                    <?php foreach ($author->books as $book) : ?>
                  <li class="list-group-item"><?= $book->title; ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                
                <?php endforeach; ?>

            </div>

        </div>

    </div>
</div>
