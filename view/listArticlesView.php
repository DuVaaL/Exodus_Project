<?php ob_start() ?>

<?php while($data = $posts->fetch()){
            $title = 'Exodus · Site d\'information hightech';
    ?>
                     <article>
                            <div class="img-content">
                                <a href=""> <img src="../public/img/huawei_240x170.jpg" alt=""></a>
                            </div>
                            <div class="text-box">
                                <h3 class="post-title" >
                                    <a href="../controller/router.php?action=article&amp;id=<?= $data['id']?>"> <?= $data['title']?>.</a>
                                </h3>
                                <p>
                                    <?= $data['content'] ?>
                                </p>
                            </div>
                     </article>
                <div class="line-down"></div>

    <?php
      }
        $posts->closeCursor();
    ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ; ?>