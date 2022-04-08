<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>
    <div class="wrap">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?php if ($sended && isset($name)) echo $name ?>">
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php if ($sended && isset($email)) echo $email ?>">
            <input type="password" class="form-control" id="pass" name="pass" placeholder="pass" value="<?php if ($sended && isset($pass)) echo $pass ?>">
            <textarea name="msg" class="form-control" id="msg" placeholder="Mesaje"><?php if ($sended && isset($msg)) : ?><?php echo $msg ?><?php endif ?></textarea>
            <?php if (!empty($errors)) : ?>
                <div class="alert error">
                    <?php echo $errors; ?>
                </div>
            <?php elseif (!empty($sended)) : ?>
                <div class="alert success">
                    <?php echo $success; ?>
                </div>
            <?php endif ?>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>
</body>

</html>