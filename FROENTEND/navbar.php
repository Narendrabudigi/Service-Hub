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
        }

        .menu-items a {
            display: block;
            padding:  10px;
            color: #fff;
            text-decoration: none;
            margin-top: 2%;
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
        /*nav end */
       
    </style>
</head>
<body>

<nav>
    <div class="logo"><a href="#"><img src="./images/logo.png" alt="Logo"></a></div>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <div class="menu-items">
        <a href="home.php" class="active" onclick="changeTab('home')"><i class="fa-solid fa-house"></i>&nbsp Home</a>
        <a href="about.php" ><i class="fa-solid fa-eject"></i>&nbsp About</a>
        <a href="services.php"  ><i class="fa-brands fa-servicestack"></i>&nbsp Services</a>
        <a href="customer-feedback.php"  ><i class="fa-solid fa-comment"></i>&nbsp Feedback</a>
        <a href="contact.php"  ><i class="fa-solid fa-address-book"></i>&nbsp Contact Us</a>
    </div>
</nav>


</body>
</html>


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

</body>
</html>
