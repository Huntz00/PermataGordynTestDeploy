<?php 
    // echo var_dump($_SERVER);
    $path = explode('/', $_SERVER["REQUEST_URI"]);
    $page = $path[count($path)-1];
?>
<!--Header-->
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <a><img src="Image/Logo.png" class="px-3" width="90px" height="auto"></a>
        <a class="navbar-brand" href="#">Permata Gordyn</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="nav" class="navbar-nav ml-auto">
                <li class="nav-item home">
                    <a class="nav-link <?php if ($page == "index.php") {echo "active";} ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item products">
                    <a class="nav-link <?php if ($page == "products.php") {echo "active";} ?>" href="products.php">Products</a>
                </li>
                <li class="nav-item contact">
                    <a class="nav-link <?php if ($page == "contacts.php") {echo "active";} ?>" href="contacts.php">Visit Us</a>
                </li>
            </ul>
            <?php if (isset($_SESSION['email'])){ ?>
                <ul class="navbar-nav">
                    <li class="nav-item cart">
                        <a class="nav-link <?php if ($page == "cart.php") {echo "active";} ?>" href="cart.php">Cart <i class="fa fa-shopping-bag"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item cart">
                        <a class="nav-link <?php if ($page == "invoices.php") {echo "active";} ?>" href="invoices.php">My Orders</a>
                    </li>
                </ul>
            <?php }?>
                
            
            <ul class="navbar-nav">
                <li class="nav-item contact">

                <?php 
                    if (isset($_SESSION['email'])){
                        //echo "<p1 style='color:white;'>Welcome " .  $_SESSION['name'] . "</p1>";
                        echo "<a style='color:white;' href='userProfile.php'>Welcome, "  . $_SESSION['name'] . "</a>";
                    }
                ?>
                </li>
            </ul>
            <?php 
                    if (isset($_SESSION['email'])){
                        echo '<ul class="navbar-nav">
                        <li class="nav-item button ml-2">
                            <button type="button" class="btn btn-secondary"><a href="logout.php">Logout</a></button>
                        </li>
                    </ul>';
                    } else if (!isset($_SESSION['email'])){
                        echo '
                        <ul class="navbar-nav">
                            <li class="nav-item button ml-2">
                            <button type="button" class="btn btn-secondary"><a href="signIn.php">Login</a></button>
                            </li>
                        </ul>';
                    }
                ?>
        </div>
    </nav>
</div>