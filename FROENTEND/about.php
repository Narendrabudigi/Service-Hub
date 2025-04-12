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
        .nav
        {
            position: sticky;
            top: 0;
            z-index: 100;

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
        .caption h1
        {
            margin-left: 30%;
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
        .menu-items  a.active {
            background-color:white;
            color:black;
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
        
        /*form */
        /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        } */

        form {
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            max-width: 500px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            align-items: center;
            margin-left: 10%;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .error-message {
            color: red;
            margin-top: -15px;
            margin-bottom: 15px;
        }
        /* form end */
        .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;  
    }

    .heading {
      font-size: 40px;
      font-weight: bold;
      margin-bottom: 10px;
      animation-delay: 0.5s;
    }

    .sub-heading {
      font-size: 32px;
      font-style: oblique;
      color:  #0069d9;
      margin-top: 0;
      animation-delay: 1s;
    }
    .simple-heading{
      font-size: 26px;
      font-style: oblique;
      color: lightcoral;
      margin-top: 0;
      animation-delay: 1s;
    }

    .description {
      font-family: Arial, sans-serif;
      color: #333333;
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 20px;
      animation-delay: 1.5s;
    }

    .slideshow {
      position: relative;
      max-width: 400px; /* Decrease image size by setting a smaller width */
      margin: 20px auto; /* Center the slideshow */
      overflow: hidden;
      border: 2px solid #000; /* Add a border to the slideshow */
      animation-delay: 2s;
    }

    .slideshow img {
      width: 100%;
      height: auto;
      display: none;
      border: 2px solid transparent; /* Add a transparent border to the images */
      border-radius: 8px; /* Add border radius for a rounded look */
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add a 3D animated border with box-shadow */
    }

    .button-container {
      text-align: center;
      margin-top: 20px;
      animation-delay: 3s;
    }

    .button-container a.button {
      display: inline-block;
      margin-bottom: 10px;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }

    .button-container a.button:hover {
      background-color: #0069d9;
    }
       
    </style>
</head>
<body>

<nav>
    <div class="logo"><a href="#"><img src="./images/logo.png" alt="Logo"></a></div>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <div class="menu-items">
        <a href="index.php" ><i class="fa-solid fa-house"></i>&nbsp Home</a>
        <a href="about.php" class="active" onclick="changeTab('about')"><i class="fa-solid fa-eject"></i>&nbsp About</a>
        <a href="services.php"  ><i class="fa-brands fa-servicestack"></i>&nbsp Services</a>
        <a href="customer-feedback.php" ><i class="fa-solid fa-comment"></i>&nbsp Feedback</a>
        <a href="contact.php"  ><i class="fa-solid fa-address-book"></i>&nbsp Contact Us</a>
    </div>
</nav>
<div class="slideshow" style="animation-delay: 2s;">
    <img src="./images/1.jpg" alt="Image 1">
    <img src="./images/2.jpg" alt="Image 2">
    <img src="./images/3.jpg" alt="Image 3">
</div>

<script>
    var images = document.querySelectorAll('.slideshow img');
    var currentImage = 0;

    function showNextImage() {
        images[currentImage].style.display = 'none';
        currentImage = (currentImage + 1) % images.length;
        images[currentImage].style.display = 'block';
    }

    setInterval(showNextImage, 3000); // Change image every 3 seconds (slower speed)
</script>

<br>

<div class="container">
    <h1 class="heading" style="animation-delay: 2.5s;"><u><b>Revolutionizing the Future:</b></u></h1>
    <h2 class="sub-heading" style="animation-delay: 2.7s;">Introducing Service Hub</h2>
    <h2 class="simple-heading" style="animation-delay: 2.7s;">Welcome to Service Hub</h2>
    <p class="description" style="animation-delay: 3s;">
        At Service Hub, we believe in the power of seamless communication between workers and end customers. Our mission is to revolutionize the way businesses and customers interact, creating a platform that fosters efficient and effective communication for the greater good.
    </p>
    <h2 class="simple-heading" style="animation-delay: 2.7s;">Who We Are</h2>
    <p class="description" style="animation-delay: 3.3s;">
        Service Hub is a dedicated team of professionals committed to bridging the gap between workers and end customers. We understand the importance of clear and concise communication in ensuring the success of any business. With this in mind, we have developed a platform that empowers both workers and customers to connect effortlessly.
    </p>
    <h2 class="simple-heading" style="animation-delay: 2.7s;">Our Vision</h2>
    <p class="description" style="animation-delay: 3.6s;">
        Our vision at Service Hub is to create a world where communication barriers are a thing of the past. We envision a future where workers and customers can engage in meaningful conversations with ease, leading to enhanced understanding, improved customer satisfaction, and ultimately, the success of businesses across various industries.
    </p>
    <h2 class="simple-heading" style="animation-delay: 2.7s;">Innovative Technology</h2>
    <p class="description" style="animation-delay: 3.9s;">
        Service Hub leverages cutting-edge technology to provide a user-friendly and intuitive platform. Our innovative solutions are designed to streamline communication processes, making it simple for workers and customers to connect, collaborate, and resolve issues.
    </p>
    <h2 class="simple-heading" style="animation-delay: 2.7s;">Dedicated Support</h2>
    <p class="description" style="animation-delay: 4.2s;">
        Service Hub is more than just a platform; we are your partners in communication. Our dedicated support team is available around the clock to assist with any queries or concerns. We are here to ensure that your experience with Service Hub is smooth and productive.
    </p>
    <h2 class="simple-heading" style="animation-delay: 2.7s;">Join Us on the Journey</h2>
    <p class="description" style="animation-delay: 4.2s;">
        Service Hub is not just a company; it's a movement toward better communication. Join us on this journey as we strive to create a world where every interaction is meaningful, efficient, and enjoyable. Together, let's build a bridge between workers and end customers, one connection at a time.
    </p>
</div>

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
