<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 text-center" style="max-width: 600px;">
        <h1 class="h3">Login</h1>

        <?php if(isset($_GET['incorrect'])): ?> <!--if passwords is incorrect alert will appear-->
        <div class="alert alert-warning">Incorrect email or password</div>  
        <?php endif ?>      


        <?php if(isset($_GET['register'])): ?> <!--if the account has been created alert will appear-->
        <div class="alert alert-success">Account created, please Login</div>  
        <?php endif ?> 
        
        <?php if(isset($_GET['suspended'])): ?> <!-- ur acc has banned-->
        <div class="alert alert-danger">Account Suspended</div>  
        <?php endif ?> 


        <form action="_actions/login.php" method="post" class="mb-2">
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
            <button class="btn btn-primary w-100">Login</button>
        </form>
        <a href="register.php">register</a>
    </div>
</body>
</html>