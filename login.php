<?php
    require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up With Google</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/image.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w">
                    <span class="login100-form-title p-b-53">
                        Sign In With
                    </span>

                    <a href="#" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="<?php echo $loginURL ?>" class="btn-google m-b-20">
                        <img src="images/google.png" alt="GOOGLE">
                        Google
                    </a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>