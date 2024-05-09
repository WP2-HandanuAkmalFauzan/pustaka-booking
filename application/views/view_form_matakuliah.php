<html>
<head>
 <title>Form Input Matakuliah</title>
</head>
<body>
    <center>
        <form action="<?= base_url('Matakuliah/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="NIM" id="NIM" placeholder="required">
                        <div class="col-sm-6 col-danger"> <?= form_error('NIM'); ?> <div
                        d>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="required">
                        <div class="col-sm-6 col-danger"> <?= form_error('nama'); ?> <div
                        d>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="Tanggal Lahir" id="nama" placeholder="required">
                        <div class="col-sm-6 col-danger"> <?= form_error('tgl'); ?> <div
                        d>
                    </td>
                </tr>
                <tr>
                    <th>Kode Matkul</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode" placeholder="required">
                        <div class="col-sm-6 col-danger"> <?= form_error('kode'); ?> <div
                        d>
                    </td>
                </tr>
                <tr>
                    <th>Nama Matkul</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="matkul" id="matkul" placeholder="required">
                        <div class="col-sm-6 col-danger"> <?= form_error('matkul'); ?> <div
                        d>
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
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