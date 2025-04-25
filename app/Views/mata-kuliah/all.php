<!-- Ini Tugas Bonus -->
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mata Kuliah</title>
</head>

<body>

    <h1>Daftar Mata Kuliah</h1>
    <table border="1">
        <tr>
            <th>Dosen</th>
            <th>Nama Mata Kuliah</th>
        </tr>

        <?php foreach ($matakuliah as $mk) { ?>
            <tr>
                <td><?php echo $mk['dosen']; ?></td>
                <td><?php echo $mk['nama']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>