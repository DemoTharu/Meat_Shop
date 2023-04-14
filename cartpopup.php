<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="cartpopup.css">
</head>
<body>
    <div class="cart_icon">
        <img src="img/Cart.svg" alt="Cart" onclick="openpopup()">
    </div>
    <div class="cart_box" id="cart">
        <div class="cart_box_header">
            <h2 onclick="closepopup()">×</h2>
            <h4>Cart</h4>
        </div><hr>
        <div class="choise">
            <h5>You choose these products</h5>
        </div>
        <div class="footer"><hr>
            <a href="Cart.php">Go to Cart &nbsp
                <img src="img/arrow-right.svg" alt="Arrow">
            </a>
        </div>
    </div>
    <script>
        let cart = document.getElementById("cart");
        function openpopup(){
            cart.classList.add("cart_open");
        }
        function closepopup(){
            cart.classList.remove("cart_open");
        }
    </script>
</body>
</html>