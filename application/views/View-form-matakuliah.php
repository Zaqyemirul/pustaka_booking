<html>
    <head>
        <title>Form Input Perkuliahan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class = "bg-info-subtle">
        <center>
            <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
                <table class="position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-primary-subtle rounded">
                    <tr>
                        <th colspan="3">Form Input Data Mata Kuliah</th>
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
                            <input class="form-control"  type="text" name="kode" id="kode">
                        </td>
                    </tr>
                    <tr>
                        <th>Nama MTK</th>
                        <th>:</th>
                        <td>
                            <input class="form-control"  type="text" name="nama" id="nama">
                        </td>
                    </tr>
                    <tr>
                        <th>SKS</th>
                        <th>:</th>
                        <td>
                            <select class="form-select"  name="sks" id="sks">
                                <option value="">Pilih SKS</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="submit" class="btn btn-success" value="Submit">
                            <a class="btn btn-danger" href="<?= base_url('matakuliah');?>">Reset</a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>