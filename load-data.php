<?php

$conn = mysqli_connect("localhost", "root", "", "serialize") or die("DB Connection failed! " . mysqli_error($conn));

$sql = "SELECT * FROM form ORDER BY id DESC";

$result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
$output = "";
if (isset($result) > 0) {
    $output .= "<table class='striped' id='data'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Message</th>
        </tr>
        </thead>

        <tbody>";
    foreach ($result as $keys) {
        $output .= "
                    <tr>
                        <td>{$keys['id']}</td>
                        <td>{$keys['name']}</td>
                        <td>{$keys['email']}</td>
                        <td>{$keys['phone']}</td>
                        <td>{$keys['country']}</td>
                        <td>{$keys['gender']}</td>
                        <td>{$keys['message']}</td>
                    </tr>
                    ";
    }
    $output .= "</tbody></table>";
    echo $output;
    mysqli_close($conn);
}
