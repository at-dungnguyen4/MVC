
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST" accept-charset="utf-8">
    <label for="category_id">Category_id:</label>
    <select name="category_id" id="">
    <?php
      foreach($data2 as $value2){
    ?>
        <option value="<?php echo $value2['id']?>"><?php echo $value2['id']?></option> 
    <?php
      }
    ?>
    </select></br>
    <label for="user_id">User_id:</label>
    <select name="user_id" id="">
    <?php
      foreach($data1 as $value1){
    ?>
        <option value="<?php echo $value1['id']?>"><?php echo $value1['id']?></option> 
    <?php
      }
    ?>
    </select></br>
    <label for="title">Title:</label><br/>
    <input type="text" name="title" value="<?php print htmlentities($title) ?>"/><br/>
    <label for="view">View:</label><br/>
    <input type="text" name="view" value="<?php print htmlentities($view) ?>"/><br/>
    <label for="is_active">Is_active:</label><br/>
    <input type="text" name="is_active" value="<?php print htmlentities($is_active) ?>"/><br/>
    <label for="content">Content:</label><br/>
    <input type="text" name="content" value="<?php print htmlentities($content) ?>"/><br/>
    <label for="created_at">Created_at:</label><br/>
    <input type="text" name="created_at" value="<?php print htmlentities($created_at) ?>"/><br/>
    <label for="updated_at">Updated_at:</label><br/>
    <input type="text" name="updated_at" value="<?php print htmlentities($updated_at) ?>"/><br/>
    <input type="submit" name="add-blog" value="Submit" />
  </form>



</body>
</html>