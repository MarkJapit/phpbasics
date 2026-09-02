<?php
// 1. DATABASE CONNECTION
$servername = "localhost";
$username = "root";
$password = "";
$db = "myfirstdb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// 2. INITIALIZE VARIABLES
$req_type = ($_SERVER['REQUEST_METHOD'] === 'POST') ? '$_POST' : '$_GET';
$isSuccess = false;
$fname = "";
$mname = "";
$lname = "";

// 3. HANDLE DATA AND DATABASE INSERTION
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get values safetly from POST
    $fname = $_POST['fname'] ?? '';
    $mname = $_POST['mname'] ?? '';
    $lname = $_POST['lname'] ?? '';

    // Only insert if the submit button or form was triggered
    if (isset($_POST['submit'])) {
        // Secure Prepared Statement to prevent SQL Injection
        $stmt = $conn->prepare("INSERT INTO persons (person_fname, person_mname, person_lname) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fname, $mname, $lname);
        
        if ($stmt->execute()) {
            $isSuccess = true;
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
} else {
    // Get values safely from GET
    $fname = $_GET['fname'] ?? '';
    $mname = $_GET['mname'] ?? '';
    $lname = $_GET['lname'] ?? '';
}
$conn->close();
?>

<!-- 4. HTML DISPLAY LAYER -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output No. 1</title>
    <style>
        body { font-family: "Arial", sans-serif; margin: 20px; }
        .success-msg { color: green; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Data is sent here, and it is stored in the <?php echo htmlspecialchars($req_type); ?> variable</h2>
    
    <table>
        <tr>
            <td width="120">First Name:</td>
            <td style="text-decoration: underline"><?php echo htmlspecialchars($fname); ?></td>
        </tr>
        <tr>
            <td>Middle Name:</td>
            <td style="text-decoration: underline"><?php echo htmlspecialchars($mname); ?></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td style="text-decoration: underline"><?php echo htmlspecialchars($lname); ?></td>
        </tr>
    </table>

    <br>

    <?php if ($isSuccess): ?>
        <p class="success-msg">Record Successfully Inserted to Database!</p>
    <?php endif; ?>

    <br>
    <a href="./">Return to Main Form</a>

</body>
</html>