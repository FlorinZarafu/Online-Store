<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- font-awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="login d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form d-flex align-items-center flex-column">
                        <div class="text-clipped form-logo">E-Store</div>
                        <form action="" method="POST"
                            class="d-flex align-items-center justify-content-center flex-column mt-2">
                            <h2 class="pb-2">Welcome Back!</h2>
                            <input type="email" name="email" placeholder="E-mail">
                            <input type="password" name="password" placeholder="Password">
                            <input type="submit" name="submit" value="Login" class="login-btn">
                            <div class="useful-link mt-3">
                                <a class="forgot-password" href="#">forgot password?</a>
                                <a class="create-account" href="#">create new acount</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>