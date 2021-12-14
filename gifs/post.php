<?php require_once("$_SERVER[DOCUMENT_ROOT]/generation/head-home.php"); ?>
      
<?php require_once("$_SERVER[DOCUMENT_ROOT]/generation/header-home.php"); ?>

<?php require_once("$_SERVER[DOCUMENT_ROOT]/pagination-home.php"); ?>

<?php require_once("$_SERVER[DOCUMENT_ROOT]/db.php"); ?>

 <?php $posts = get_post_by_id($_GET['id']);?> 

      <div class="container container-flex">


         <main role="main">
            <img src="<?php echo $posts["thumbnail"] ?>" class="image-full">
            
            <h2><?php echo $posts["title"] ?></h2>
            
            <?php echo $string = $posts["content"] ?>

         </main>
         
         <aside class="sidebar">
            
            <div class="sidebar-widget">
               <h2 class="widget-title">РАНДОМНЫЕ ПОСТЫ</h2>        
  
   <?php 
   
   $post = post_random();

   foreach ($post as $posts): 

   ?>
               <div class="widget-recent-post">
              <a  style = " text-decoration:none; " href="post.php?id=<?php echo $posts["id"] ?> "> <div class="widget-recent-post">
                 <h3 class="widget-recent-post-title"><?php echo $posts["title"] ?></h3> 
                  <img src="<?php echo $posts["thumbnail"] ?>" alt="" class="widget-image">
               </div></a>
               </div>
 <?php endforeach; ?>
               
            </div>
            
         </aside>
      </div>
      
      <?php require_once("$_SERVER[DOCUMENT_ROOT]../footer.php"); ?>
   </body>
</html>