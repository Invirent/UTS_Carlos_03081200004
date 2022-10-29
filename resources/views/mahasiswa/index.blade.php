<?php
    use Illuminate\Support\Facades\DB;
    $mahasiswa = DB::select("SELECT * FROM student_data WHERE student_id = '03081200004'");
    $matkuls = DB::select("SELECT * FROM khs_detail_view WHERE StudentID = '03081200004'");
?>

<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Carlos</a>
        </div>
    </nav>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                @foreach ($mahasiswa as $mhs)
                <?php
                    $ip = (326.700)/95;
                    $name = $mhs->nama;
                    $student_id = $mhs->student_id;
                    $term = $mhs->term;
                    $ipk = number_format((float)$ip, 2, '.', '');
                    break;
                    ?>
                @endforeach
                <div class="row">
                    <div class="col">Nama: </div>
                    <div class="col">{{$name}}</div>
                </div>
                <div class="row">
                    <div class="col">Student ID: </div>
                    <div class="col">{{$student_id}}</div>
                </div>
                <div class="row">
                    <div class="col">Term: </div>
                    <div class="col">{{$term}}</div>
                </div>
                <div class="row">
                    <div class="col">IP: </div>
                    <div class="col">{{$ipk}}</div>
                </div>
            </div>
            <div class="col-6" id="student_picture">
                <img src="img/UTS_Carlos_03081200004.jpg" alt="UTS_Carlos_03081200004" width="200" height="200" class="img-thumbnail">
            </div>
        </div>
    </div>

    <br>

    <h6>Matakuliah Yang Diambil</h6>

    <table class="table table-striped">
        <thead>
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Kode </th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Nilai Huruf</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach($matkuls as $matkul){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$matkul->kode_matkul."</td>";
                        echo "<td>".$matkul->nama_matkul."</td>";
                        echo "<td>".$matkul->sks."</td>";
                        echo "<td>".$matkul->huruf."</td>";
                        echo "</tr>";
                        $no++;
                    }
                ?>
            </tbody>
        </thead>
    </table>
</body>
</html>
