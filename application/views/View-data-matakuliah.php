<html>
    <head>
        <title>Tampil Data Matakuliah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">
        <center>
            <table class="position-absolute top-50 start-50 translate-middle shadow p-3 mb-5 bg-success-subtle rounded">
                <div>
                    <tr>
                        <th class="p-2" colspan="3">
                            Tampil Data Matakuliah
                        </th>
                    </tr>
                    <tr>
                        <td class="p-2" colspan="3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <th>Kode MTK</th>
                        <th>:</th>
                        <td>
                            <?= $kode; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nama MTK</th>
                        <th>:</th>
                        <td>
                            <?= $nama; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>SKS</th>
                        <th>:</th>
                        <td>
                            <?= $sks; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <a class="btn btn-primary" href="<?= base_url('matakuliah');?>">Kembali</a>
                        </td>
                    </tr>
                </div>
            </table>
        </center>
    </body>
</html>