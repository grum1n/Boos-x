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

    $sql = "SELECT id, name, email, subject, message, date FROM contact_forma ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='dashboard-emails-box site-text'>
                    <p><i class='fa-solid fa-id-card'></i> Post nr.: " . $row["id"]. " </p>
                    <p> Name : " . $row["name"]. "</p>
                    <p>" . $row["email"]. "</p>
                    <p>Subject : " . $row["subject"]. "</p>
                    <p>Msg : " . $row["message"] . "
                    <p class='fontColor-blue'>Date : " . $row["date"] . "
                </div>
                ";
        }
    } else {
        echo "<p class='site-text fontColor-white'>No messages .</p>";
    }

    mysqli_close($conn);
?>