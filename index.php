
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book</title>
</head>
<body>
    <h1>Phone Book</h1>

    <?php
    require_once 'db_connection.php';

    $sql = "SELECT id, name, phone FROM contacts";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Phone</th><th>Action</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["name"]."</td><td>".$row["phone"]."</td><td><a href='edit_contact.php?id=".$row["id"]."'>Edit</a> | <a href='delete_contact.php?id=".$row["id"]."'>Delete</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>

    <h2>Add New Contact</h2>
    <form action="add_contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        <input type="submit" value="Add Contact">
    </form>
</body>
</html>
