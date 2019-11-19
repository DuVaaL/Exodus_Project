 <?php ob_start() ?>  

		<h2><?= $post_article['title'];?> </h2><br>
		<div>
			<img class="reduce" src="/public/img/<?= $post_article['img_in'] ;?>" alt="">
		</div><br>
         <p>	
            <?= $post_article['all_content'];?> <br>

           <strong class="update" style="margin-left: 40%;"><?= $post_article['creation_date_fr'];?></strong> 
            <?php	
            $title = $post_article['title'];
            ?>
         </p>   
					<h1>Commentaires </h1>

				<p>
					<form action="/index.php?action=addComment&amp;id=<?= $post_article['id'];?>" method="POST">
						<div>
						     <label for="author">Auteur</label><br />
						     <input type="text" name="author" />
						</div>
						<div>
						     <label for="author">Email</label><br />
						     <input type="text" name="email">
						</div>
						<div>
							  <label for="comment">Commentaire</label><br />
							  <textarea cols="50" rows="3" name="comment"></textarea>
						 </div><br>
						   <div>
						        <input type="submit" value="Envoyer">
						  </div>
					</form>
				</p>
        <p>
        	<?php while ($dataa = $posts_comments->fetch()) { ?>

        		<p class="comments">
		            <b><?= $dataa['author'];?></b> le <?= $dataa['comments_date_fr'];?> <br>
		            <?= $dataa['comments'];?>
        		</p>


        	<?php
        		} 
        		$posts_comments->closeCursor();
        		?>
        </p>

 <?php $content = ob_get_clean() ; ?>

 <?php require('template2.php') ;?>