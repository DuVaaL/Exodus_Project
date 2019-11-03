<?php ob_start() ?>

<?php while($data = $posts->fetch()){
    ?>
        <p>
            <?= $data['id'];?>
            <?= $data['title'];?>
            <?= $data['content'];?>
            <?= $data['creation_date_fr'];
               $title = 'Articles du Site ';?>
            <br><br>
            <a href="../controller/router.php?action=article&amp;id=<?= $data['id'] ?>">lien</a>
        </p>
    <?php
      }
        $posts->closeCursor();
    ?>

<?php $content = ob_get_clean(); ?>

<?php ob_start() ?>

<?php while($data = $trendss->fetch()){
    ?>

    <p>
        <?= $data['id_trend']; ?> =>
        <?= $data['title'];

        ?>
    </p>

<?php
      }
        $trendss->closeCursor();
    ?>

<? $trend = ob_get_clean(); ?>

<?php require('template.php') ; ?>