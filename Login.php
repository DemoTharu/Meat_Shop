<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="parent_div">
        <div class="child_div">
            <div class="login">
                <h1>Login Page</h1>
            </div>
            <div class="user_pass">
                <div class="user">
                    <div class="email">
                        <p><b>Email</b></p>
                    </div>
                    <div class="uemail">
                        <input type="text" name="email" id="email">
                    </div>
                </div>
                <div class="pass">
                    <div class="pas">
                        <p><b>Password</b></p>
                    </div>
                    <div class="upass">
                        <input type="password" name="pass" id="pass">
                    </div>
                </div>
            </div>
            <div class="submit">
                <input type="button" value="Submit" onclick="msg()">
            </div>
        </div>
    </div>
    <script>
        function msg() {
            var email = document.getElementById('email').value;
            var pass = document.getElementById('pass').value;
            if (email == "abc@gmail.com" && pass == "123") {
                alert("You have successfully Logged in");
                window.open("Home.php", "_self");                
            }
            else{
                alert("You have an error");
                var myWindow = window.open("", "_self");
                myWindow.document.write("<p>You have an error fix it.</p>");
            }
        }
    </script>
</body>
</html>