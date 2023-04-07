<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $password = isset($_POST['password']) ? $_POST['password'] : null;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
</head>
<body>

    <?php
        if($password){
            session_start();

            if($password == 'Zero_0*' && $_POST['name'] == 'zero'){
                $_SESSION['user_id'] = 989;header("Location: /chat/chat.php");
            }
            
            elseif($password == 'kaRl091' && $_POST['name'] == 'karl'){
                $_SESSION['user_id'] = 979;header("Location: /chat/chat.php");
            }
            
            elseif($password == 'blacK/H' && $_POST['name'] == 'black'){
                $_SESSION['user_id'] = 969;header("Location: /chat/chat.php");
            }
            
            elseif($password == 'jomHxZ10198' && $_POST['name'] == 'jm'){
                $_SESSION['user_id'] = 959;header("Location: /chat/chat.php");
            }else{
                echo "<script>alert('password is not correct try again');window.location.href='./index.html'</script>";
            }
        }else{
            echo 'password is not entered';
        }
    ?>
</body>
</html>