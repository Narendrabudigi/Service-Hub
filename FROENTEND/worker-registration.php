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
         .caption {
        border-radius: 10px;
        width: 400px;
        background-color: orange;
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
          .logo1 img {
            width: 80px; /* Set the width of the image as needed */
            height: 80px; /* Maintain aspect ratio */
            margin-right: 10px; /* Adjust the spacing between the logo and text */
            border-radius: 50%;
            margin-left:-350%;
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
    /*form */
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
        margin-left: -2%;
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
</style>
<body>
    <nav>
        <div class="logo"><a href="#"><img src="./images/logo.png" alt="Logo"></a></div>
        <div class="logo1"><a href="#"><img src="./images/worker.png" alt="Logo"class="logo"></a></div>
        <div class="menu-icon" onclick="toggleMenu()">☰</div>
        <div class="menu-items">
            <a href="index.php"><i class="fa-solid fa-house"></i>&nbsp Home</a>
            <a href="about.php"><i class="fa-solid fa-eject"></i>&nbsp About</a>
            <a href="services.php"><i class="fa-brands fa-servicestack"></i>&nbsp Services</a>
            <a href="customer-feedback.php"><i class="fa-solid fa-comment"></i>&nbsp Feedback</a>
            <a href="contact.php"><i class="fa-solid fa-address-book"></i>&nbsp Contact Us</a>
        </div>
    </nav>  
    <div class="caption"><h1>Worker Registration Form</h1></div>

    <form id="registrationForm"  class="form-body" action="worker-store.php" enctype="multipart/form-data" method="post">
        <label for="image">Worker Image:</label>
        <input type="file" id="image" name="worker" accept="image/*" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="worktype">Work-type:</label>
        <input type="text" id="worktype" name="worktype" required>

        <label for="experience">Experience (years):</label>
        <input type="number" id="experience" name="experience" required>

        <label for="minCharge">Minimum Charge:</label>
        <input type="text" id="minCharge" name="minCharge" required>

        <label for="contact">Contact:</label>
        <div style="display: flex;">
            <input type="text" id="countryCode" name="countryCode" value="+91" readonly style="width: 10%;">
            <input type="tel" id="contact" name="contact" maxlength="10" minlength="10" required placeholder="Enter mobile number">
        </div>

        <label for="location">Shop Location:</label>
         <select id="location" name="location" required placeholder:"choose area";>
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

        <center><button type="submit" name="submit">Register</button></center>

        <div class="error-message" id="errorMessage"></div>
    </form>

    <script>
        function toggleMenu() {
            var menuItems = document.querySelector('.menu-items');
            menuItems.classList.toggle('active');
        }
    </script>
   
</body>
</html>
