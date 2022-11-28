<?php session_start();
/*    
    CSCI 466 Group Project

    Authors:
       Sami Rezae         Z1920718   
       Bailey Appelhans   Z1759158
       Gerald Ellsworth   Z1885378
       David Flowers II   Z1942130

    Date: 11/30/2022

*/?>
<style>

table {
    margin: 50px auto;

}

button {
  background-color: #D72638;
  color: white;
  font-size: 24px;
  border: none;
  border-radius: 5%;
  padding: 10px 20px;
  margin: 5% 0;
}
</style>
<html>
    <head>
        <title>Assignment 9</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <body>
        <div id="nav">
            <img src="../images/logo.png">
            <ul>
                <li><a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>Home</a></li>
                <li><a href="account.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>Account</a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H76.1l60.3 316.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H179.9l-9.1-48h317c14.3 0 26.9-9.5 30.8-23.3l54-192C578.3 52.3 563 32 541.8 32H122l-2.4-12.5C117.4 8.2 107.5 0 96 0H24zM176 512c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm336-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48z"/></svg>Cart</a></li>
            </ul>
        </div>
        <div id="content">
            <div id="title"><h1>Checkout</h1></div>
            <form action="checkout.php" method="post">
            <table class="ch">
            <tr>
                    <td colspan="2"><h2>Shipping Information</h2></td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="firstname" placeholder="John" required></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastname" placeholder="Doe" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" placeholder="email@email.com" required></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" placeholder="1234 Main St" required></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" name="city" placeholder="City" required></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><input type="text" placeholder="State" required></td>
                </tr>
                <tr>
                    <td>Zip:</td>
                    <td><input type="text" name="zip" placeholder="12345" required></td>
                </tr>
                <tr></tr>
                <table>
                    <tr>
                        <td colspan="2"><h2>Billing Information</h2></td>
                    </tr>
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="bfirstname" placeholder="John" required></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="blastname" placeholder="Doe" required></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="baddress" placeholder="1234 Main St" required></td>
                    </tr>
                    <tr>
                        <td>City:</td>
                        <td><input type="text" name="bcity" placeholder="City" required></td>
                    </tr>
                    <tr>
                        <td>State:</td>
                        <td><input type="text" name="bstate" placeholder="State" required></td>
                    </tr>
                    <tr>
                        <td>Zip:</td>
                        <td><input type="text" name="bzip" placeholder="12345" required></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td colspan="2"><h2>Payment Information</h2></td>
                    </tr>
                    <tr>
                        <td>Card Holder</td>
                        <td><input type="text" name="cardholder" placeholder="John Doe" required></td>
                    </tr>
                    <tr>
                        <td>Card Number:</td>
                        <td><input type="text" name="cardnumber" placeholder="1234567812345678" minlength="16" maxlength="16" required></td>
                    </tr>
                    <tr>
                        <td>Expiration:</td>
                        <td><input type="text" name="expiration" placeholder="01/2022" minlength="7" maxlength="7" required></td>
                    </tr>
                    <tr>
                        <td>Security Code:</td>
                        <td><input type="text" name="securitycode" placeholder="123" minlength="3" maxlength="3" required></td>
                    </tr>
                </table>
                <center><button type="submit" name="checkout">Checkout</button></center>
            </form>
            <?php
            include '../hidden.php';
            
            // Connect to the database
            try {
                $pdo = new PDO($dbname, $username, $password);
            }
            catch(PDOexception $e) {
                echo "<p>Connection to database failed: ${$e->getMessage()}</p>\n";
            }

            if (isset($_POST['checkout'])) {
                // Shipping Information
                //$firstname = $_POST['firstname'];
                //$lastname = $_POST['lastname'];
                $email = $_POST['email'];
                //$address = $_POST['address'];
                //$city = $_POST['city'];
                //$state = $_POST['state'];
                //$zip = $_POST['zip'];

                // Billing Information
                //$bfirstname = $_POST['bfirstname'];
                //$blastname = $_POST['blastname'];
                //$baddress = $_POST['baddress'];
                //$bcity = $_POST['bcity'];
                //$bstate = $_POST['bstate'];
                //$bzip = $_POST['bzip'];

                // Card
                //$cardholder = $_POST['cardholder'];
                //$cardnumber = $_POST['cardnumber'];
                //$expiration = $_POST['expiration'];
                //$securitycode = $_POST['securitycode'];

                $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
                if (!preg_match ($pattern, $email) ){  
                    echo "Email is not valid.";  
                }
            }

            ?>
        </div>

    </body>
</html>