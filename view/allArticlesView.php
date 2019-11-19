<?php ob_start() ?>

<?php while($data = $page->fetch()){
            $title = 'Exodus · Site d\'information hightech';
    ?>
                     <article>
                            <div class="img-content">
                                <a href=""> <img src="public/img/<?= $data['img'];?>" alt=""></a>
                            </div>
                            <div class="text-box">
                                <h3 class="post-title" >
                                    <a href="action/article/<?= $data['id']?>"> <?= $data['title']?>.</a>
                                </h3>
                                <p>
                                    <?= $data['content'] ?>
                                </p>
                            </div>
                     </article>
                <div class="line-down"></div>

    <?php
      }
        $page->closeCursor();
    ?>

<?php $content = ob_get_clean(); ?>

<?php require('template3.php') ; ?>
