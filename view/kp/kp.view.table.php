<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Katalog Perhiasan</title>
    <style>
        .table-kp{
            border-collapse: collapse;
        }
        .table-kp th, .table-kp td{
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table class="table-kp">
        <tr>
            <th>ID</th>
            <th>Nama Perhiasan</th>
            <th>Deskripsi</th>
        </tr>
        <?php foreach ($kp as $kp): ?>
            <tr>
                <td><?php echo $kp['id'] ?></td>
                <td><?php echo $kp['nama'] ?></td>
                <td><?php echo $kp['deskripsi'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>