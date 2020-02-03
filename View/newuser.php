
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
    <label for="full_name">Full Name:</label><br/>
    <input type="text" name="full_name" value="<?php print htmlentities($full_name) ?>"/><br/>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" value="<?php print htmlentities($email) ?>"/><br/>
    <label for="rank">Rank:</label><br/>
    <input type="text" name="rank" value="<?php print htmlentities($rank) ?>"/><br/>
    <label for="is_active">Is_active:</label><br/>
    <input type="text" name="is_active" value="<?php print htmlentities($is_active) ?>"/><br/>
    <label for="created_at">Create_at:</label><br/>
    <input type="text" name="created_at" value="<?php print htmlentities($created_at) ?>"/><br/>
    <input type="submit" name="add-user" value="Submit" />
  </form>




</body>
</html>