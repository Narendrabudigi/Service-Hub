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

        .nav {
            position: sticky;
            top: 0;
            z-index: 100;
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
            background-color: white; /* Highlight the active link with a white background */
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
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .services-heading {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
            animation-delay: 0.5s;
            text-align: center;
        }

        .service-item {
            margin-top: 20px;
        }

        .service-title {
            font-style: oblique;
            text-align: left;
            font-size: 22px;
            color: lightcoral;
        }

        .service-description {
            font-size: 18px;
            line-height: 1.5;
            color: #333333;
        }
    </style>
</head>
<body>

<nav class="nav">
    <div class="logo"><a href="#"><img src="./images/logo.png" alt="Logo"></a></div>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <div class="menu-items">
        <a href="index.php" onclick="changeTab('home')"><i class="fa-solid fa-house"></i>&nbsp Home</a>
        <a href="about.php" onclick="changeTab('about')"><i class="fa-solid fa-eject"></i>&nbsp About</a>
        <a href="services.php" class="active" onclick="changeTab('services')"><i class="fa-brands fa-servicestack"></i>&nbsp Services</a>
        <a href="customer-feedback.php" onclick="changeTab('feedback')"><i class="fa-solid fa-comment"></i>&nbsp Feedback</a>
        <a href="contact.php" onclick="changeTab('contact')"><i class="fa-solid fa-address-book"></i>&nbsp Contact Us</a>
    </div>
</nav>

<div class="container">
    <!-- Your services content goes here -->

    <h1 class="services-heading" style="animation-delay: 0.5s; font-style: inherit;"><u><center>Our Services</center></u></h1>
    <div class="service-item" style="animation-delay: 1s;">
        <h2 class="service-title" style="font-style: oblique; text-align: left; font-size: 22px; color: lightcoral;">Welcome to Service Hub – Your Gateway to Seamless Communication!</h2>
        <h4 class="service-description">
            At Service Hub, we understand the pivotal role effective communication plays in fostering strong relationships between workers and end customers. Our mission is to revolutionize the way businesses interact, ensuring a smooth and efficient flow of information. We provide a comprehensive suite of communication services that empower both workers and customers to connect effortlessly.
        </h4>
    </div>
    <div class="service-item" style="animation-delay: 1.5s;">
        <h2 class="service-title" style="font-style: oblique;text-align: left; font-size: 18px; color: lightcoral;">1. Real-Time Messaging:</h2>
        <h4 class="service-description">
            Stay connected with your team and customers in real-time through our secure messaging platform. Whether you're coordinating tasks or addressing customer inquiries, our intuitive interface ensures instant and efficient communication.
        </h4>
    </div>
    <div class="service-item" style="animation-delay: 2s;">
        <h2 class="service-title" style="font-style: oblique; text-align: left; font-size: 18px; color: lightcoral;">2. Task Collaboration:</h2>
        <h4 class="service-description">
            Boost productivity by facilitating seamless collaboration among workers. Service Hub offers a dedicated space for task management, allowing teams to coordinate efforts and deliver exceptional results
        </h4>
    </div>
    <div class="service-item" style="animation-delay: 2.5s;">
        <h2 class="service-title" style="font-style: oblique; text-align: left; font-size: 18px; color: lightcoral;">3. Customer Support Portal:</h2>
        <h4 class="service-description">
            Elevate your customer support experience with our user-friendly portal. Customers can submit inquiries, track their requests, and receive timely updates, all in one centralized location.
        </h4>
    </div>
    <div class="service-item" style="animation-delay: 3s;">
        <h2 class="service-title" style="font-style: oblique; text-align: left; font-size: 18px; color: lightcoral;">4. Feedback Mechanism</h2>
        <h4 class="service-description">
            Gather valuable insights from customers and workers alike. Our feedback mechanism allows you to collect reviews and suggestions, fostering a culture of continuous improvement.
        </h4>
    </div>
    <div class="service-item" style="animation-delay: 3.5s;">
        <h2 class="service-title" style="font-style: oblique;  text-align: left; font-size: 18px; color: lightcoral;">5.Why Choose Service Hub??</h2>
        <h4 class="service-description">
            At Service Hub, we prioritize user experience, security, and innovation. Our platform is designed to streamline communication processes, enhance collaboration, and ultimately contribute to the success of your business. With Service Hub, you're not just investing in a communication tool; you're investing in a dynamic hub that strengthens relationships and drives excellence.

        </h4>

    </div>

    <!-- Service items go here -->
</div>

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
