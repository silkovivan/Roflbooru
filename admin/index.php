<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/db.php"); ?>
<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/head-admin.php"); ?>
<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/header-admin.php"); ?>

<div class="container container-flex">
         
         <main role="main">
         <?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/post-admin.php"); ?>
            
         <div class="pagination">
         <ul>
         <?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/pagination.php"); ?>
         </ul>
        </div>

</main>

<aside class="sidebar">
                
         </aside>
      </div>
<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/footer.php"); ?>