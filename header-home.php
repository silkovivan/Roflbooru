<header>
      <div class="container container-nav">
         <div class="site-title">
            <h1><a style="text-decoration:none; color: #143774;" href="/">Roflbooru</a></h1>

<?php 
   
   $post = lable_random();

   foreach ($post as $posts): 

   ?>
            <p class="subtitle"><?php echo $posts["text"] ?></p>
            <?php endforeach; ?>

</div>
         <nav>
            <ul>
               <li><a href="/" class="current-page">ГЛАВНАЯ</a></li>
               <li><a href="/comics" >КОМИКСЫ</a></li>
               <li><a href="/gifs">ГИФКИ</a></li>
               <li><a href="/art">ART</a></li>
               <li><a href="/mems">МЕМЫ</a></li>
            </ul>
         </nav>
      </div>
   </header>