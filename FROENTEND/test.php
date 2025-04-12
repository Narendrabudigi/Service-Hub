<?php
session_start();

include "dbconfig.php";



    if (isset($_POST['submit'])){
        $rate = $_POST['rating'];
        $contact=$_POST['contact'];

        if ($rate >= 1 && $rate <= 5) {
            $numResult = mysqli_query($conn, "SELECT COUNT(ratings) AS num_records FROM workers WHERE contact='$contact'");
            $numRow = mysqli_fetch_assoc($numResult);
            $num = $numRow['num_records'];

            $summResult = mysqli_query($conn, "SELECT SUM(ratings) AS sum_ratings FROM workers WHERE contact='$contact'");
            $summRow = mysqli_fetch_assoc($summResult);
            $summ = $summRow['sum_ratings'];

            if ($num > 0) {
                $var = ($summ + $rate) / ($num + 1);
                $query = "UPDATE workers SET ratings = '$var' WHERE contact='$contact'";
            } else {
                $query = "UPDATE workers SET ratings='$rate' WHERE contact='$contact'";
            }

            $result = mysqli_query($conn, $query);

            if ($result) {
                echo '<script type="text/javascript">
                    alert("Feedback submitted successfully");
                    window.location.href="customer-feedback.php";
                </script>';
            } else {
                echo '<script type="text/javascript">
                    alert("Error submitting feedback");
                    window.location.href="customer-feedback.php";
                </script>';
            }
        } else {
            echo '<script type="text/javascript">
                alert("Enter a value between 1 to 5");
                window.location.href="customer-feedback.php";
            </script>';
        }
    }
?>
