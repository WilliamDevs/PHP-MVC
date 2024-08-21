<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
</head>
<body>
    <a href="<?=ROOT?>">Home</a>
    <a href="<?=ROOT?>/Login">Log In</a>
    <a href="<?=ROOT?>/Logout">Logout</a>

  


 
    <div id="middle">
    <?php if(!empty($errors)):?>
    <div id='alert'>
    <?=  implode("<br>",$errors);?>
    </div>
    <?php endif;?>
    <h1>Sign Up Form</h1>
    <form method="post">
    
  
    <input name="email" placeholder="username" />
    <input name="password" placeholder="password"/>
    

    <input type="submit" value="Submit"/>
    </form>
    </div>
</body>
</html>