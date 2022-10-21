<html>

<head>
<title>Tampil Data Mahasiswa</title>
</head>

<body>
    <?php echo validation_errors(); ?>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data mahasiswa
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
                    <?= $NAMASISWA; ?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $NIS; ?>
                </td>
            </tr>
            <tr>
                <td>TANGGALLAHIR</td>
                <td>:</td>
                <td>
                    <?= $TANGGALLAHIR; ?>
                </td>
            <tr>
                <td>TEMPATLAHIR</td>
                <td>:</td>
                <td>
                    <?= $TEMPATLAHIR; ?>
                </td>
            </tr>
            <tr>
                <td>JENISKELAMIN</td>
                <td>:</td>
                <td>
                    <?= $JENISKELAMIN; ?>
                </td>
            </tr>
            <tr>
                <td>agama</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                 <td colspan="3" align="center">
                    <a href="<?= base_url('Mahasiswa');
                    ?>">Kembali</a>
                </td> 
                </tr>
        </table>
    </center>