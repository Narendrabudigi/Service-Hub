<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types of workers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
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
            width: 80px; /* Set the width of the image as needed */
            height: 80px; /* Maintain aspect ratio */
            margin-right: 10px; /* Adjust the spacing between the logo and text */
            border-radius: 50%;
        }

        .menu-icon {
            display: none;
            cursor: pointer;
        }

        .menu-items {
            display: flex;
            margin-top: 2%;
        }

        .menu-items a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
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
            border: blue solid;
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
        .portfolio-content h2,p
        {
            margin-left: 80px;
            color: brown;
        }

        .portfolio-content h2 {
            margin-top: 0;
            color:black;
            text-align: left;
        }

        .portfolio-content p {
            margin-bottom: 10px;
            color:brown;
            text-align: left;
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
            margin-left: -150%;
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
        .caption
        {
            border-radius:10px;
            width:200px;
            background-color:orange;
        }

        /* Media Query for smaller screens */
        @media (max-width: 600px) {
            .portfolio-card {
                flex: 0 0 80%;
                margin-left:10%;
            }
        }
   /* end worker styles */
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
    </style>
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
<center><div class="caption"><h1>Electricians</h1></div> </center>
<form class="search"method=post action="electricians-filter.php">
        <img src="./images/search-icon.jpg">
        <select id="location" name="shop" required placeholder:"choose area";>
        <!-- Individual options -->
       <option value="bhavani-nagar-tirupati">Bhavani Nagar, Tirupati</option>
        <option value="balaji-colony-tirupati">Balaji Colony, Tirupati</option>
        <option value="chandragiri-tirupati">Chandragiri, Tirupati</option>
        <option value="ramanuja-nagar-tirupati">Ramanuja Nagar, Tirupati</option>
        <option value="akkarampalli-tirupati">Akkarampalli, Tirupati</option>
        <option value="renigunta-road-tirupati">Renigunta Road, Tirupati</option>
        <option value="kapilatheertham-tirupati">Kapilatheertham, Tirupati</option>
        <option value="gandhi-road-tirupati">Gandhi Road, Tirupati</option>
        <option value="nandi-circle-tirupati">Nandi Circle, Tirupati</option>
        <option value="shanthi-nagar-tirupati">Shanthi Nagar, Tirupati</option>
        <option value="tiruchanoor-tirupati">Tiruchanoor, Tirupati</option>
        <option value="sri-padmapuram-tirupati">Sri Padmapuram, Tirupati</option>
        <option value="balagi-nagar-tirupati">Balagi Nagar, Tirupati</option>
        <option value="ramapuram-tirupati">Ramapuram, Tirupati</option>
        <option value="sri-kalahasti-road-tirupati">Sri Kalahasti Road, Tirupati</option>
        <option value="venkata-puram-tirupati">Venkata Puram, Tirupati</option>
        <option value="karakambadi-road-tirupati">Karakambadi Road, Tirupati</option>
        <option value="sri-vari-padam-tirupati">Sri Vari Padam, Tirupati</option>
    </select>
        <button type="submit" value="submit">Search</button>
    </form>

<div class="portfolio-container">
    
    <!-- Row 1 -->
    <!-- Worker Block 1 -->
   <?php
   include "dbconfig.php";
    $res=mysqli_query($conn, "select * from workers where worktype='electrician'") or die(mysqli_error($conn));
    if (!$res) {
        die(mysqli_error($link)); // Output any MySQL errors
    }
    $count = mysqli_num_rows($res);
       while ($row = mysqli_fetch_array($res)) 
       {
        $w_image=$row["Workerimage"];
        $Name = $row["workername"];
        $rate = $row["ratings"];
        //$Expert = $row["Expert-in"];
        $Experience = $row["Experience"];
        $Minimum_Charge = $row["Minimumcharge"];
        $Contact = $row["Contact"];
        $Shop_Location = $row["Shoplocation"];
        ?>
    
    
    <div class="portfolio-card">
    <center> <img src="<?php echo $w_image;?>" alt="Worker Image" style="border-radius:50%;margin-left:-10%;height: 100px;width:100px;margin-top:3%;"></center>
        <div class="portfolio-content">
            <h2>Name:
                <?php echo $Name;?>
                </h2>
            <p>Mimimum-charge:
            <?php echo $Minimum_Charge;?>

            </p>
            <p>Experience:
            <?php echo $Experience;?>

            </p>
            <p>Rating:  <?php echo $rate;?>
Star</p>
            <p>Contact:
            <?php echo $Contact;?>
            </p>
            <p>Location:
            <?php echo $Shop_Location;?>
            </p>
            <ul>
            <li><a href="https://wa.me/+91<?php echo $Contact; ?>"><img src="./images/whatsapp.jpeg"></a></li>
                <li><a href="https://www.google.com/maps?q=<?php echo $Shop_Location; ?>"><img src="./images/map-icon.png"></a></li>
            </ul>
        </div>
    </div>
    <?php
       }
       ?>

<script>
    function toggleMenu() {
        var menuItems = document.querySelector('.menu-items');
        menuItems.classList.toggle('active');
    }
</script> 

<script>
    function toggleMenu() {
        var menuItems = document.querySelector('.menu-items');
        menuItems.classList.toggle('active');
    }
</script>
</body>
</html>