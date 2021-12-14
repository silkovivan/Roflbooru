<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/db.php"); ?>
<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/dbconnection.php"); ?>
<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/head-admin.php"); ?>
<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/header-admin.php"); ?>

<?php $posts = get_post_by_id($_GET['id']);?> 

<div class="container container-flex">
         
<form method="POST" action="editdb.php" $id="<?php echo $posts["id"] ?>">

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM roflbooru WHERE id=''$id'";
    $query_run = mysqli_query($con, $query);
   }

?>

<div class="" >

   <label for="ID"> ID статьи</label>
   <input  type="text" name="id" id="id" value="<?php echo $posts["id"] ?>" >

 <label for="text">Название статьи: </label>
 <input type="text" name="title" id="title" value="<?php echo $posts["title"] ?>" >

 </div>

 <div class="" >

<label for="text">Текст статьи </label>
<textarea type="text" name="content" id="content" style="margin: 0px; width: 1065px; height: 104px;  resize: vertical;" rows="15" value="'<?php echo htmlspecialchars($posts["content"]) ?>'" ><?php echo htmlspecialchars($posts["content"]) ?></textarea>

</div>

<div class="" >

<label for="text">Картинка статьи: </label>
<input type="text" name="thumbnail" id="thumbnail" value="<?php echo $posts["thumbnail"] ?>" placeholder="https://">

</div>

<div class="" >
<script>$('.datepicker').datepicker();</script>

<label for="text">Дата статьи: </label>
<input type="date" name="date" id="date" value="<?php echo $posts["date"] ?>" >

</div>

<div class="" >

<select name="star" id="star">

<option value="1" <?php if($posts["star"]=="1") echo 'selected="selected"'; ?>>Комиксы</option>
<option value="2" <?php if($posts["star"]=="2") echo 'selected="selected"'; ?>>Гифки</option>
<option value="3" <?php if($posts["star"]=="3") echo 'selected="selected"'; ?>>Art</option>
<option value="4" <?php if($posts["star"]=="4") echo 'selected="selected"'; ?>>Мемы</option>

</select>

</div>

<button type="submit" name="update" >Изменить</button>

</form>