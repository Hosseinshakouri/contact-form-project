<?php
// --- Connect to database and fetch messages ---
$conn = new mysqli("localhost", "root", "", "contact");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM contact ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Panel - Messages</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { border-collapse: collapse; width: 100%; table-layout: fixed; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; word-wrap: break-word; }
        th { background-color: #f2f2f2; }

        /* Center the "Message" header */
        th.message-col { text-align: center; }

        /* Set relative widths for columns */
        th.id-col, td.id-col { width: 5%; }
        th.name-col, td.name-col { width: 15%; }
        th.phone-col, td.phone-col { width: 15%; }
        th.email-col, td.email-col { width: 20%; }
        th.message-col, td.message-col { width: 45%; }
    </style>
</head>
<body>
    <h2>Messages</h2>
    <table>
        <tr>
            <th class="id-col">ID</th>
            <th class="name-col">Name</th>
            <th class="phone-col">Phone</th>
            <th class="email-col">Email</th>
            <th class="message-col">Message</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td class="id-col"><?= $row['id'] ?></td>
            <td class="name-col"><?= htmlspecialchars($row['name']) ?></td>
            <td class="phone-col"><?= htmlspecialchars($row['mobile']) ?></td>
            <td class="email-col"><?= htmlspecialchars($row['email']) ?></td>
            <td class="message-col"><?= htmlspecialchars($row['message']) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>


<?php $conn->close(); ?>
