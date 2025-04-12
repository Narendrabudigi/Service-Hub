<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            margin-top: 2%;
        }

        .menu-items a:hover {
            background-color: #fff;
            color: black;
            border-radius: 10px;
            border: black solid;
        }

        .menu-items a.active {
            background-color: white; /* Highlight the active link with white background */
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

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        .map {
            text-align: center;
        }

        .map a {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }
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
        <a href="customer-feedback.php"><i class="fa-solid fa-comment"></i>&nbsp Feedback</a>
        <a href="contact.php" class="active" onclick="changeTab('contact')"><i class="fa-solid fa-address-book"></i>&nbsp Contact Us</a>
    </div>
</nav>

<div class="container">
    <U><B><h1>Company Details</h1></B></U>
    <div class="contact-info">
        <h2>Contact Information</h2>
        <ul>
            <li><strong>Name:</strong> SriVenkateswara Government Polytechnic</li>
            <li><strong>Mobile:</strong> <a href="tel:+918309377748">+91 8309377748</a> </li>
            <li><strong>Email:</strong> svgp.tirupati@gmail.com</li>
            <li><strong>Address:</strong>KT ROAD Tirupati</li>
        </ul>
    </div>
    <div class="map">
        <!-- Embed your map or provide a link to a map service here -->
        <p><a href="https://www.google.com/maps?q=sv+government+polytechnic+tirupati">View on Map</a></p>
    </div>
</div>

<center><img src="./images/logo.png" alt="Construction Image" width="390px" height="500px"></center>
<br>

<script>
    function toggleMenu() {
        var menuItems = document.querySelector('.menu-items');
        menuItems.classList.toggle('active');
    }

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
