<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types of workers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #3498db;
            padding: 15px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }

        .logo a {
            display: flex;
            align-items: center;
            color: #fff;
            text-decoration: none;
        }

        .logo img {
            width: 80px;
            height: 80px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .menu-icon {
            display: none;
            cursor: pointer;
        }

        .menu-items {
            display: flex;
        }

        .menu-items a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            margin-top: 3%;
        }
        .menu-items a:hover{
            background-color: #fff;
            color: black;
            border-radius: 10px;
            border: black solid;
        }

        @media only screen and (max-width: 768px) {
            .menu-icon {
                display: block;
                position: fixed;
                margin-left: 90%;
            }
            .menu-items a:hover{
            background-color: #fff;
            color: black;
        }

            .menu-items {
                display: none;
                flex-direction: column;
                text-align: left;
                margin-right: 10%;
            }

            .menu-items.active {
                display: flex;
            }

            nav a {
                display: none;
            }
        }
        .logo1
        {
            height: 5px;
            width: auto;
            border-radius: 50%;
            margin-top: 0%;
            margin-left: -33%;
        }
        /*nav end */
        /* worker styles */
        .portfolio-container {
            display: flex;
            justify-content: space-between;
            max-width: 2000px;
            flex-wrap: wrap;
            margin-top: 3%;
        }

        .portfolio-card {
            flex: 0 0 28%;
            margin: 1%;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            border:blue solid;
        }

        .portfolio-card:hover {
            transform: scale(1.05);
        }

        .portfolio-card img {
            width: auto;
            height: auto;
            border-bottom: 2px solid #3498db;
           margin-left: 40%;
            
        }

        .portfolio-content {
            padding: 20px;
            text-align: center;
            margin-left:-10%;
        }

        .portfolio-content h2 {
            margin-top: 0;
            color: #2c3e50;
        }

        .portfolio-content p {
            margin-bottom: 10px;
            color: #7f8c8d;
        }
        .portfolio-content a
        {
            display: inline-block;
            padding: 0px 20px;
            background-color:orange;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s; 
        }
        .portfolio-content a h2
        {
            color:black;
        }
        .portfolio-content a img{
            display: flex;
            /* padding: 10px 20px; */
            /* background-color: #3498db; */
            color: #fff;
            text-decoration: none;
            border-radius: 50%;
            height:35px;
            width: 35px;
            margin-right: 80%;
            /* transition: background-color 0.3s; */
        }
        .portfolio-content ul 
        {
            list-style: none;
            padding: 10px;
            margin-left: 35%;
            margin-right: 15%;
            display: flex;
            
        }
        .portfolio-content ul li 
        {
         padding-right: 10px;
        }

        /* Media Query for smaller screens */
        @media (max-width: 600px) {
            .portfolio-card {
                flex: 0 0 100%;
            }
        }
   /* end worker styles */
    </style>
</head>

<body>
<nav>
    <div class="logo"><a href="#"><img src="./images/logo.png" alt="Logo"></a></div>
    <div class="logo1"><a href="#"><img src="./images/customer.png" alt="Logo"class="logo"></a></div>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <div class="menu-items">
        <a href="index.php"><i class="fa-solid fa-house"></i>&nbsp Home</a>
        <a href="about.php"><i class="fa-solid fa-eject"></i>&nbsp About</a>
        <a href="services.php"><i class="fa-brands fa-servicestack"></i>&nbsp Services</a>
        <a href="customer-feedback.php"><i class="fa-solid fa-comment"></i>&nbsp Feedback</a>
        <a href="contact.php"><i class="fa-solid fa-address-book"></i>&nbsp Contact Us</a>
    </div>
</nav>   
<center><div class="caption"><h1>Customer Services</h1></div> </center>
<center><div class="caption"><h2>Types of workers</h2></div> </center>
<div class="portfolio-container">
    
    <!-- Row 1 -->
    <!-- Worker Block 1 -->
    <div class="portfolio-card">
        <img src="./images/carpenter-logo.png" alt="Worker Image">
        <div class="portfolio-content">
            <a href="carpenters.php" target="_self"><h2>Carpenters</h2></a>
        </div>
    </div>

    <!-- Worker Block 2 -->
    <div class="portfolio-card">
        <img src="./images/electrician-logo.png" alt="Worker Image">
        <div class="portfolio-content">
            <a href="electricians.php" target="_self"><h2>Electricians</h2></a>
        </div>
    </div>

    <!-- Worker Block 3 -->
    <div class="portfolio-card">
        <img src="./images/plumber-logo.png" alt="Worker Image">
        <div class="portfolio-content">
            <a href="plumbers.php" target="_self"><h2>Plumbers</h2></a>
        </div>
    </div>

    <!-- Worker Block 4 -->
    <div class="portfolio-card">
        <img src="./images/machanic-logo.png" alt="Worker Image">
        <div class="portfolio-content">
            <a href="machanics.php" target="_self"><h2>Mechanics</h2></a>
        </div>
    </div>

    <!-- Row 2 -->
    <!-- Worker Block 5 -->
    <div class="portfolio-card">
        <img src="./images/painter-logo.png" alt="Worker Image">
        <div class="portfolio-content">
            <a href="painters.php" target="_self"><h2>Painters</h2></a>
        </div>
    </div>

    <!-- Worker Block 6 -->
    <div class="portfolio-card">
        <img src="./images/mason-logo.png" alt="Worker Image">
        <div class="portfolio-content">
            <a href="masons.php" target="_self"><h2>Mansons</h2></a>
        </div>
    </div>

    <!-- others Worker Block -->
    <div class="portfolio-card">
        <img src="./images/other-workers-logo.png" alt="Worker Image">
        <div class="portfolio-content">
            <a href="other-workers.php" target="_self"><h2>Other Workers</h2></a>
        </div>
    </div>
    
</div>
<script>
    function toggleMenu() {
        var menuItems = document.querySelector('.menu-items');
        menuItems.classList.toggle('active');
    }
</script>
</body>

</html>
