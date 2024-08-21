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
    <a href="<?=ROOT?>/Signup">Signup</a>
    <a href="<?=ROOT?>/Logout">Logout</a>
   
    
    <div id="middle">
    <?php if(!empty($errors)):?>
    <div id='alert'>
    <?=  implode("<br>",$errors);?>
    </div>

    <?php endif;?>
    <h1>Login Form</h1>
    <form method="post">
    <input name="email"   placeholder="email" />
    <input name="password"placeholder="password" type="password" />
    <input type="submit" value="Login"/>
    </form>
    </div>
</body>
</html>