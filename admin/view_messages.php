<?php
$conn = new mysqli("localhost", "root", "", "restaurant_db");
$results = $conn->query("SELECT * FROM contacts");
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<h2>Contact Messages</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Date</th>
    </tr>

<?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
    </tr>
<?php } ?>

</table>
