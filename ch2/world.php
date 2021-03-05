<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  print<<<_HTML_
       <form method="post" action="$_SERVER[PHP_SELF]">
       Your Name:<input type="text" name="user" />
       <br/>
       <button type="submit" class="btn btn-primary">Say World</button>
       </form>
_HTML_;?>
</body>
</html>