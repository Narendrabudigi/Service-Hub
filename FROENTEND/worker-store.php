<?php
include "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the contact number already exists in the database
    $contact = $_POST['contact'];
    $name = $_POST['name'];
    $sqlCheckContact = "SELECT * FROM workers WHERE contact = '$contact' AND workername = '$name' OR contact = '$contact'";

    $resultCheckContact = $conn->query($sqlCheckContact);

    if ($resultCheckContact->num_rows > 0) {
        echo '<script>alert("worker with is contact  already rigistered pls choose another.");
        window.location.href="worker-registration.php";
        </script>';
    } else {
        // If contact number is unique, proceed with storing the data
        if (isset($_POST["submit"])) {
            handleImageUpload("worker", $dst1);
            insertimage($dst1);
        }
    }
}

function handleImageUpload($fileInputName, &$destinationVariable)
{
    $tm = md5(time());
    $filename = $_FILES[$fileInputName]["name"];
    $destination = "./worker-images/" . $tm . $filename;
    $destinationVariable = "worker-images/" . $tm . $filename;

    if (!move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $destination)) {
        die("Error uploading file");
    }
}

function insertimage($dst1)
{
    global $conn;
    $dst1 = /* assign a value to dst1 */

    $query = "INSERT INTO workers (workerimage, workername, worktype, Experience, minimumcharge, contact, shoplocation) 
              VALUES ('$dst1', '$_POST[name]', '$_POST[worktype]', '$_POST[experience]', '$_POST[minCharge]', '$_POST[contact]', '$_POST[location]')";
    
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    echo '<script type="text/javascript">
        alert("Worker Registered successfully");
        window.location.href="worker-registration.php";
    </script>';
}
?>
