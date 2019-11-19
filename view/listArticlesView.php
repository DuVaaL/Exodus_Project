<?php ob_start() ?>

<?php while($data = $posts->fetch()){
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
                                <p class="content" >
                                    <?= $data['content'] ?>
                                </p>
                            </div>
                     </article>
                <div class="line-down"></div>

    <?php
      }
        $posts->closeCursor();
    ?>
    <div class="more-article" >
         <a href="all_pages"><h4>Tous les articles</h4></a>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ; ?>
