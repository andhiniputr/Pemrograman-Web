<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $hello = "Hello!";
    $nama = "I'm Andhini Putri Arini";
    $intro = "I am a person who has a high curiosity and a willingness to continue to 
    grow and learn new things. Happy socializing and fully responsible for the 
    obligations given. Have a strong desire to learn.";
    $major = "Informatics Student";
    $email = "andhiniputr@gmail.com";
    $phone = "0821-2280-3089";
    $alamat = "Komplek Deperla Blok B.10, DKI Jakarta";
    $experience1 = "Anggota Bidang Pengabdian Masyarakat Badan Eksekutif Mahasiswa
    Fakultas Ilmu Komputer UPN Veteran Jawa Timur";
    $experience2 = "Peserta Bootcamp Progate
    (Kelas Python, JavaScript dan SQL)";
    $experience3 = "Anggota Divisi Keamanan MOSAIK 2022";
    $experience4 = "Ketua Pelaksana Donor Darah 2022";
    $experience5 = "Wakil Ketua Fun Day with Fasilkom 2022";
    $experience6 = "Ketua Divisi Acara Abdi Desa 2022";
    $experience7 = "Bendahara Open Talk 2022";
    $experience8 = "Ketua Divisi Acara HDC 2022";
    $skill1 = "Disiplin dan passionate";
    $skill2 = "Berkemampuan bahasa Inggris dengan cukup baik";
    $skill3 = "Mudah beradaptasi";
    $skill4 = "Memahami beberapa bahasa pemrograman";
    $education1 = "S1 Informatika UPI YPTK Padang (2020-2021)";
    $education2 = "S1 Informatika UPN Veteran Jawa Timur (2021-Sekarang)";
    $hobi1 = "Membaca buku";
    $hobi2 = "Mendengarkan musik";
    $hobi3 = "Bermain dengan kucing";
    ?>
    <table class="container">
        <tr>
            <td class="photo" rowspan="5">
                <img src="foto.jpeg" style="border-radius: 35px; width: 400px; height: 300px">
            </td>
            <td class="hello" colspan="2">
                <?php echo $hello;?>
            </td>
        </tr>
        <tr>
            <td class="name" colspan="2">
                <?php echo $nama;?>
            </td>
        </tr>
        <tr>
             <td class="intro" colspan="2">
                <?php echo $intro;
                $dateOfBirth = "26-01-2003";
                $today = date("Y-m-d");
                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                echo ' I am '.$diff->format('%y'). '  years old.';
                ?>
            </td>
        </tr>
        <tr>
            <td class="major">
                <?php echo $major;?>
            </td>
            <td class="email">
                <?php echo $email;?>
            </td>
        </tr>
    </table>

    <table class="container">
        <tr>
            <td class="exp">
                <?php echo "Experience";?>
            </td>
            <td class="skil">
                <?php echo "Skills";?>
            </td>  
        </tr>
        <tr>
            <td rowspan="8">
                <?php
               echo "<ul class=\"isi\">";
                    echo "<li>$experience1</li>";
                    echo "<li>$experience2</li>";
                    echo "<li>$experience3</li>";
                    echo "<li>$experience4</li>";
                    echo "<li>$experience5</li>";
                    echo "<li>$experience6</li>";
                    echo "<li>$experience7</li>";
                    echo "<li>$experience8</li>";
                echo "</ul>";
                ?>
            </td>
            <td>
                <?php
                echo "<ul class=\"isi\">";
                    echo "<li>$skill1</li>";
                    echo "<li>$skill2</li>";
                    echo "<li>$skill3</li>";
                    echo "<li>$skill4</li>";
                echo "<ul>";
                ?>
            </td>
        </tr>

        <br><br>

    <table class="container">
        <tr>
            <td class="edu">
                <?php echo "Education";?>
            </td>
            <td class="hobi">
                <?php echo "Hobbies";?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo "<ul class=\"isi\">";
                    echo "<li>$education1</li>";
                    echo "<li>$education2</li>";
                echo "</ul}>";
                ?>
            </td>
            <td>
                <?php
                echo "<ul class=\"isi\">";
                    echo "<li>$hobi1</li>";
                    echo "<li>$hobi2</li>";
                    echo "<li>$hobi3</li>";
                echo "</ul>";
                ?>
            </td>
        </tr>
        <tr>
            <td class="phone">
                <?php echo "Phone";?>
            </td>
            <td class="achiev">
                <?php echo "Address";?>
            </td>
        </tr>
        <tr>
            <td class="isi2">
                <?php echo $phone;?>
                </td> 
            <td class="isi2">
                <?php echo $alamat;?>
            </td>
        </tr>
    </table>
</body>
</html>