
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
    <option value="<?php echo $dataID['category_id']?>"><?php echo $dataID['category_id']?></option>
    <?php
      foreach($data2 as $value2){
        if($value2['id'] != $dataID['category_id']){
    ?>
        <option value="<?php echo $value2['id']?>"><?php echo $value2['id']?></option> 
    <?php
      }
    }
    ?>
    </select></br>
    <label for="user_id">User_id:</label>
    <select name="user_id" id="">
      <option value="<?php echo $dataID['user_id']?>"><?php echo $dataID['user_id']?></option>
    <?php
      foreach($data1 as $value1){
        if($value1['id'] != $dataID['user_id']){
    ?>
        <option value="<?php echo $value1['id']?>"><?php echo $value1['id']?></option> 
    <?php
      }
    }
    ?>
    </select></br>
    <label for="title">Title:</label><br/>
    <input type="text" name="title" value="<?php echo $dataID['title'] ?>"/><br/>
    <label for="view">View:</label><br/>
    <input type="text" name="view" value="<?php echo $dataID['view'] ?>"/><br/>
    <label for="is_active">Is_active:</label><br/>
    <input type="text" name="is_active" value="<?php echo $dataID['is_active'] ?>"/><br/>
    <label for="content">Content:</label><br/>
    <input type="text" name="content" value="<?php echo $dataID['content'] ?>"/><br/>
    <label for="created_at">Created_at:</label><br/>
    <input type="text" name="created_at" value="<?php echo $dataID['created_at'] ?>"/><br/>
    <label for="updated_at">Updated_at:</label><br/>
    <input type="text" name="updated_at" value="<?php echo $dataID['updated_at'] ?>"/><br/>
    <input type="submit" name="update-blog" value="Submit" />
  </form>

</body>
</html>