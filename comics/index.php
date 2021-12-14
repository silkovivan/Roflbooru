<?php require_once("$_SERVER[DOCUMENT_ROOT]/db.php"); ?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/pagination.css">

      <title>Roflbooru | КОМИКСЫ</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
   </head>

<body>

<header>
      <div class="container container-nav">
         <div class="site-title">
            <h1><a style="text-decoration:none; color: #143774;" href="/">Roflbooru</a></h1>
            
<?php 
   
   $post = lable_random();

   foreach ($post as $posts): ?>

            <p class="subtitle"><?php echo $posts["text"] ?></p>
            <?php endforeach; ?>
            
         </div>
         <nav>
            <ul>
               <li><a href="/">ГЛАВНАЯ</a></li>
               <li><a href="/comics" class="current-page" >КОМИКСЫ</a></li>
               <li><a href="/gifs">ГИФКИ</a></li>
               <li><a href="/art">ART</a></li>
               <li><a href="/mems">МЕМЫ</a></li>
            </ul>
         </nav>
      </div>
   </div>
</header>

<div class="container container-flex">
         
         <main role="main">
            
         <?php require_once("$_SERVER[DOCUMENT_ROOT]/comics/generation/post-comics.php"); ?>
         
         <div class="pagination">
         <ul>
         <?php require_once("$_SERVER[DOCUMENT_ROOT]/comics/generation/pagination.php"); ?>
         </ul>
      </div>

         </main>
         
         <aside class="sidebar">
            
            <div class="sidebar-widget">
               <h2 class="widget-title">ДОБАВИТЬ ПОСТ</h2>
               <img src="img/about-me.jpg" alt="" class="widget-image">
               <a href="../addpost.php" class="widget-body">СОЗДАТЬ НОВЫЙ ПОСТ</a>
            </div>
            
            <div class="sidebar-widget">
               <h3 class="widget-title">РАНДОМНЫЕ ПОСТЫ</h3>
               
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