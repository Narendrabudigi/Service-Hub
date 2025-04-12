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

        .menu-items a:hover {
            background-color: #fff;
            color: black;
            border-radius: 10px;
            border: black solid;
        }

        .menu-items a.active {
            background-color: white;
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

            .menu-items a:hover {
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

        .logo1 {
            height: 5px;
            width: auto;
            border-radius: 50%;
            margin-top: 0%;
            margin-left: -33%;
        }

        .caption h1 {
            margin-left: 30%;
        }

        /* Styling for the search bar */
        .search {
            display: flex;
            align-items: center;
            width: 300px;
            margin: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
            padding: 5px;
            margin-top: 3%;
        }

        .search input {
            flex: 1;
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 5px;
        }

        .search button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 5px;
        }

        .search img {
            width: 50px;
            margin-right: 5px;
        }

        /* Styling for worker data */
        .portfolio-container {
            display: flex;
            justify-content: space-between;
            max-width: 2000px;
            flex-wrap: wrap;
            margin-top: 3%;
        }

        .portfolio-card {
            flex: 0 0 68%;
            margin: 1%;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            border: blue solid;
            margin-left:10%;
            padding-left=-300%;
        }

        .portfolio-card:hover {
            transform: scale(1.05);
        }

        .portfolio-card img {
            width: auto;
            height: auto;
            border-bottom: 2px solid #3498db;
            margin-left: -40%;
        }

        .portfolio-content {
            padding: 20px;
            text-align: center;
            margin-left:-10%;
        }

        .portfolio-content h2,
        p {
            margin-left: 80px;
            color: brown;
        }

        .portfolio-content h2 {
            margin-top: 0;
            color: black;
            text-align: left;
        }

        .portfolio-content p {
            margin-bottom: 10px;
            color: brown;
            text-align: left;
        }

        .portfolio-content a img {
            display: flex;
            color: #fff;
            text-decoration: none;
            border-radius: 50%;
            height: 35px;
            width: 35px;
            margin-left: -150%;
        }

        .portfolio-content ul {
            list-style: none;
            padding: 10px;
            margin-left: 35%;
            margin-right: 15%;
            display: flex;
        }

        .portfolio-content ul li {
            padding-right: 10px;
        }

        .caption {
            border-radius: 10px;
            background-color: orange;
            width: 300px;
            height: 40px;
          
        }
        .caption h1{
            margin-right:70px;
        }

        /* end worker styles */
    </style>
</head>

<body>
    <nav>
        <div class="logo"><a href="#"><img src="./images/logo.png" alt="Logo"></a></div>
        <div class="menu-icon" onclick="toggleMenu()">☰</div>
        <div class="menu-items">
            <a href="index.php"><i class="fa-solid fa-house"></i>&nbsp Home</a>
            <a href="about.php"><i class="fa-solid fa-eject"></i>&nbsp About</a>
            <a href="services.php"><i class="fa-brands fa-servicestack"></i>&nbsp Services</a>
            <a href="customer-feedback.php" class="active" onclick="changeTab('home')"><i class="fa-solid fa-comment"></i>&nbsp Feedback</a>
            <a href="contact.php"><i class="fa-solid fa-address-book"></i>&nbsp Contact Us</a>
        </div>
    </nav>
    <center><div class="caption"><h1>Carpenters</h1></div> </center>
    
    <?php
    include "dbconfig.php";

    // Retrieve the name from the GET request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $shop = $_POST['shop'];
        // Perform a database search using $name
        $sql = "SELECT * FROM workers WHERE shoplocation = '$shop' AND worktype='carpenter'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $w_image = $row["Workerimage"];
                $Name = $row["workername"];
                $worktype = $row["worktype"];
                $Experience = $row["Experience"];
                $rating = $row["ratings"];
                $Minimum_Charge = $row["Minimumcharge"];
                $Contact = $row["Contact"];
                $Shop_Location = $row["Shoplocation"];
                ?>

                <div class="portfolio-container">
                    <div class="portfolio-card">
                        <center><img src="<?php echo $w_image; ?>" alt="Worker Image" style="border-radius:20%;margin-left:-10%;height: 100px;width:100px;margin-top:3%;"></center>
                        <div class="portfolio-content">
                            <h2>Name:
                                <?php echo $Name; ?>
                            </h2>
                            <p>workertype:
                                <?php echo $worktype; ?>
                            </p>
                            <p>Mimimum-charge:
                                <?php echo $Minimum_Charge; ?>
                            </p>
                            <p>Experience:
                                <?php echo $Experience; ?>
                            </p>
                            <p id="rate">Rating:&nbsp<?php echo $rating; ?> </p>
                            <p>Contact:
                                <?php echo $Contact; ?>
                            </p>
                            <p>Location:
                                <?php echo $Shop_Location; ?>
                            </p>
                            <ul>
                            <li><a href="https://wa.me/+91<?php echo $Contact; ?>"><img src="./images/whatsapp.jpeg"></a></li>
                <li><a href="https://www.google.com/maps?q=<?php echo $Shop_Location; ?>"><img src="./images/map-icon.png"></a></li>
                           </ul>
                           
                        </div>
                    </div>
                </div>

    <?php
            }
        } else {
            echo '<script>alert("No results found");
            window.location.href="carpenters.php";</script>';
        }

        $conn->close();
    }
    ?>

    <script>
        function toggleMenu() {
            var menuItems = document.querySelector('.menu-items');
            menuItems.classList.toggle('active');
        }
    </script>
    <script>
        function changeTab(tabName) {
            // Remove 'active' class from all tabs
            var tabs = document.getElementsByTagName('a');
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove('active');
            }

            // Add 'active' class to the clicked tab
            var activeTab = document.querySelector('a[href="#"][onclick="changeTab(\'' + tabName + '\')"]');
            if (activeTab) {
                activeTab.classList.add('active');
            }
        }
    </script>
</body>

</html>
