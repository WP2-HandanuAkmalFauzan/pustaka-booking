<html>
<head>
 <title>Form Input Data Siswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('Datasiswa/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="Nama" id="Nama" placeholder="">
                        <div class="col-sm-6 col-danger"> <?= form_error('Nama'); ?>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="NIS" id="NIS" placeholder="">
                        <div class="col-sm-6 col-danger"> <?= form_error('NIS'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="Kelas" id="Kelas" placeholder="">
                        <div class="col-sm-6 col-danger"> <?= form_error('Kelas'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="Tgl" id="Tgl" placeholder="">
                        <div class="col-sm-6 col-danger"> <?= form_error('Tgl'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="Tmpt" id="Tmpt" placeholder="">
                        <div class="col-sm-6 col-danger"> <?= form_error('Tmpt'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Alamat" id="Alamat" placeholder="">
                        <div class="col-sm-6 col-danger"> <?= form_error('Alamat'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="JenisKelamin" value="Laki-Laki"/>Laki-Laki</td> 
                    <td>
                        <input type="radio" name="JenisKelamin" value="Perempuan"/>Perempuan</td>
                    </tr>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="Agama" id="Agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>