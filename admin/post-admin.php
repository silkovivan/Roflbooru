<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/pagination-admin.php"); ?>

<?php  

foreach ($data as $results):

?>

<article class="article-featured">            

               <h2 class="article-title"><?php echo $results["title"] ?></h2>
               <img src="<?php echo $results["thumbnail"] ?>" class="article-image">
               <p class="article-info"><?php echo date("d/m/Y", strtotime($results["date"]));?></p>
               <p class="article-body"><?php echo $string = mb_substr($results["content"], 0, 150); ?></p>

               <a href="editing.php?id=<?php echo $results["id"] ?>" class="article-read-more">Редактировать статью</a>
               <a href="deletepost.php?id=<?php echo $results["id"] ?>" class="article-read-more">Удалить статью</a>
     
</article>

<?php endforeach; ?>