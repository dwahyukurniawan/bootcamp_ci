<html>
    <title>Tugas 3 Perulangan Percabangan</title>
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <?php
        $nama = [
            "Ahmad",
            "Ikram",
            "Rudi",
            "Andi",
            "Aldi",
            "Badrun",
            "Cerry",
            "Elis",
            "Fira",
            "Haikal",
        ];
        $nilai = [
            90,
            50,
            70,
            77,
            90,
            88,
            54,
            23,
            0,
            98,
        ];

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
                <th width="50px">NO</th>
                <th width="200px">NAMA</th>
                <th width="200px">NILAI</th>
                <th width="50px">PREDIKAT</th>
                <th width="100px">STATUS</th>
            </tr>
         <?php
            for ($i=0; $i < count($nama); $i++)
            {
         ?>
         <tr>
            <td><?=$i+1; ?></td>
            <td><?=$nama[$i]; ?></td>
            <td><?=$nilai[$i]; ?></td>
            <?php
            if ($nilai[$i]>80) {
                $predikat ="A";
            } elseif (79>$nilai[$i] && $nilai[$i]>=70) {
                $predikat ="B";
            } elseif (69>$nilai[$i] && $nilai[$i]>=50) {
                $predikat ="C";
            } elseif (49>$nilai[$i] && $nilai[$i]>=40) {
                $predikat ="D";
            } else {
                $predikat ="E";
            }
            ?>
            <td><?=$predikat; ?></td>
            <td>
            <?php
            if ($nilai[$i]>=70) {
                echo "LULUS";
            } else {
                echo "TIDAK LULUS";
            }
            ?>
            </td>
         </tr>
         <?php
            }
         ?>
        </table>
    </body>
</html>