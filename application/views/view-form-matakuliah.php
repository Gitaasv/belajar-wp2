<html>

<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('Matakuliah/submit'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Matakuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <input types="text" name="kode" id="kode">
                </td>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <td>:</td>
                <td>
                    <input types="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option values="">Pilih SKS</option>
                        <option values="2">2</option>
                        <option values="3">3</option>
                        <option values="4">4</option>
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