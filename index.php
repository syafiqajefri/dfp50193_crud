<?php
require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Crud Syafiqa</title>
</head>

<body>
    <center>
<a href="tambah.php">Add New</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#1A7D58">
            <th>Bil</th>
            <th>Nama</th>
            <th>No K/P</th>
            <th>Tindakkan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM senarai";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->ic; ?></td>
                    <td>
                        <a href="update.php?idsenarai=<?php echo $row->idsenarai; ?>">Edit</a>
                        |
                        <a href="padam.php?idsenarai=<?php echo $row->idsenarai; ?>" onclick="return confirm('Anda pasti ingin padam?');">Padam</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table></center>
</body>


</html>