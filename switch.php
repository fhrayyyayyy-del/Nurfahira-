<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Mengambil data waktu otomatis
$hariInggris = date("l");
$tanggal = date("d");
$bulanInggris = date("F");
$tahun = date("Y");
$jam = date("H:i:s");

// SWITCH HARI
switch($hariInggris){

    case "Sunday":
        $hariIndonesia = "Minggu";
        break;

    case "Monday":
        $hariIndonesia = "Senin";
        break;

    case "Tuesday":
        $hariIndonesia = "Selasa";
        break;

    case "Wednesday":
        $hariIndonesia = "Rabu";
        break;

    case "Thursday":
        $hariIndonesia = "Kamis";
        break;

    case "Friday":
        $hariIndonesia = "Jumat";
        break;

    case "Saturday":
        $hariIndonesia = "Sabtu";
        break;

    default:
        $hariIndonesia = "Hari tidak diketahui";
}

// SWITCH BULAN
switch($bulanInggris){

    case "January":
        $bulanIndonesia = "Januari";
        break;

    case "February":
        $bulanIndonesia = "Februari";
        break;

    case "March":
        $bulanIndonesia = "Maret";
        break;

    case "April":
        $bulanIndonesia = "April";
        break;

    case "May":
        $bulanIndonesia = "Mei";
        break;

    case "June":
        $bulanIndonesia = "Juni";
        break;

    case "July":
        $bulanIndonesia = "Juli";
        break;

    case "August":
        $bulanIndonesia = "Agustus";
        break;

    case "September":
        $bulanIndonesia = "September";
        break;

    case "October":
        $bulanIndonesia = "Oktober";
        break;

    case "November":
        $bulanIndonesia = "November";
        break;

    case "December":
        $bulanIndonesia = "Desember";
        break;

    default:
        $bulanIndonesia = "Bulan tidak diketahui";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Switch Hari dan Bulan</title>

    <style>

        body{
            background-color: #f2f2f2;
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }

        .kotak{
            background-color: white;
            width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h1{
            color: green;
        }

        p{
            font-size: 25px;
        }

    </style>

</head>

<body>

<div class="kotak">

    <h1>Nurfahira save a date</h1>

<h2 id="jam"></h2>


<p>

        <?php

        echo "Hari Ini : <br><br>";

        echo $hariIndonesia . ", " .
             $tanggal . " " .
             $bulanIndonesia . " " .
             $tahun;

        echo "<br><br>";


        ?>

    </p>

    <script>
    function tampilJam() {
    let waktu = new Date();

    let jam = waktu.getHours();
    let menit = waktu.getMinutes();
    let detik = waktu.getSeconds();

    document.getElementById("jam").innerHTML =
        jam + ":" + menit + ":" + detik;
}

setInterval(tampilJam, 1000);
</script>




</div>

</body>
</html>