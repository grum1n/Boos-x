<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "boos";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT user_id, user_first, user_last, user_email, user_nick_name, date FROM boos_users ORDER BY user_id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='dashboard-users-table site-text'>
                    <p><i class='fa-regular fa-user'></i> Id : " . $row["user_id"]. " " . $row['user_nick_name'] . "</p>
                    <p>First Name : " . $row["user_first"]. "</p>
                    <p>Last Name : " . $row["user_last"]. "</p>
                    <p>Email : " . $row["user_email"]. "</p>
                    <p>Date : " . $row["date"]. "</p>
                </div>
            ";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>