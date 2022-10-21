<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mahasiswa
                    </th>
                </tr>                 <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NAMASISWA</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>KELAS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>TANGGALLAHIR</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>TEMPATLAHIR</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>ALAMAT</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>JENISKELAMIN</th> 
                    <td>:</td>
                    <td>
                        <select name="jeniskelamin" id="jeniskelamin">
                            <option value="">pria</option>
                            <option value="2">wanita</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>agama</th>
                    <td>:</td>
                    <td>
                    <select name="agama" id="agama">
                            <option value="">pilih agama</option>
                            <option value="2">islam</option>
                            <option value="3">katholik</option>
                            <option value="4">kristen</option>
                            <option value="5">budha</option>
                            <option value="6">hindu</option>
                            <option value="7">protestan</option>
                            <option value="8">khonghucu</option>
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