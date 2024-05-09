<html>

<head>
    <title>Tampil Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mata Kuliah
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
                    <?= $NIM; ?>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>TanggalLahir</th>
                <th>:</th>
                <td>
                    <?= $tgl; ?>
                </td>
            </tr>
            <tr>
                <th>Kode Matkul</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <td>Nama Matkul</td>
                <td>:</td>
                <td>
                    <?= $matkul; ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Matakuliah'); 
?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
