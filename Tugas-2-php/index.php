<html>
    <title>Tugas 2 Php</title>
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <?php
        $nama1 = "Ahmad";
        $nama2 = "Badrun";
        $nama3 = "Diki";
        $nim1 = "198203";
        $nim2 = "210921";
        $nim3 = "220088";
        $nilaiuts1 = 70;
        $nilaiuas1 = 70;
        $nilaiuts2 = 80;
        $nilaiuas2 = 80;
        $nilaiuts3 = 90;
        $nilaiuas3 = 90;
    ?>

    <style>
    .table tr th {
        background:#0000ff;
        }

    .table tr td {
        background:#0000;
        color:#000000;
        }

    h1 {
        background:#FFA500;
    }

    </style>

    </head>
    <body>
        <h1><center>DAFTAR NILAI MAHASISWA</center></h1>
        <p>
        <table rules="all" border="1" width="600px" class="table table-dark table-hover">
            <tr>
                <th width="50px">No</th>
                <th width="200px">Nama</th>
                <th width="200px">NIM</th>
                <th width="150px">Total Nlai</th>
            </tr>
            <tr>
                <td>1</td>
                <td><?php echo $nama1; ?></td>
                <td><?php echo $nim1; ?></td>
                <td><?php echo $nilaiuts1+$nilaiuas1; ?></td>   
            </tr>
            <tr>
                <td>2</td>
                <td><?php echo $nama2; ?></td>
                <td><?php echo $nim2; ?></td>
                <td><?php echo $nilaiuts2+$nilaiuas2; ?></td>   
            </tr>
            <tr>
                <td>3</td>
                <td><?php echo $nama3; ?></td>
                <td><?php echo $nim3; ?></td>
                <td><?php echo $nilaiuts3+$nilaiuas3; ?></td>   
            </tr>
        </table>
    </body>
</html>