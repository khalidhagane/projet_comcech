<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?=URLROOT?>/BlablaController/add_blabla">
<?php
// echo"<pre>" ;
// var_dump($data);
// echo"</pre>" ;
// exit;
?>
<?php foreach($data as $user): ?>
  <div class="mb-3">
  <div class="mb-3">
   
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input name="name" type="text" value='<?php echo $user->name ?>' class="form-control" id="exampleInputPassword1">
  </div>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"name="email" value='<?php echo $user->email; ?>'  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div  id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    
  </div>
 <?php endforeach?>
  
  <input type="submit"  class="btn btn-primary" value="Submit">
</body>
</html>