 <?php ob_start() ?>        

         <p>	
         	<?= $post_article['id'];?>
            <?= $post_article['title'];?>
            <?= $post_article['content'];?> <br>

           <strong><?= $post_article['creation_date_fr'];?></strong> 
            <?php	$title = $post_article['title'];
            ?>
         </p>   

				<h1>Commentaires </h1>
        </p>
        <p>
        	<?php while ($dataa = $posts_comments->fetch()) { ?>

        		<p>
		        	<?= $dataa['id'];?> -
		            <?= $dataa['author'];?> :
		            <?= $dataa['comments'];?>
		            <?= $dataa['comments_date_fr'];?> --
		            <?= $dataa['email'];?> 
        		</p>


        	<?php
        		} 
        		$posts_comments->closeCursor();
        		?>
        </p>

 <?php $content = ob_get_clean() ; ?>

 <?php require('template.php') ;?>