<?php require_once 'db.php' ?>
<?php//require_once("$_SERVER[DOCUMENT_ROOT]/generation/head-home.php"); ?>
<?php require 'head-home.php' ?>
<?php require_once 'header-home.php' ?>

<div class="container container-flex">
         
         <main role="main">
         <?php require 'post-home.php' ?>
           
         <div class="pagination">
         <ul>
         <?php require 'pagination.php' ?>
         </ul>
      </div>

         </main>
         
         <aside class="sidebar">
            
            <div class="sidebar-widget">
               <h2 class="widget-title">ДОБАВИТЬ ПОСТ</h2>
               <img src="img/about-me.jpg" alt="" class="widget-image">
               <a href="addpost.php" style="color: #1792d2" class="widget-body">СОЗДАТЬ НОВЫЙ ПОСТ</p>
            </div>
            
            <div class="sidebar-widget">

     <?php    $post = post_random();

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
      <?php require_once("$_SERVER[DOCUMENT_ROOT]/footer.php"); ?>
   </body>
</html>