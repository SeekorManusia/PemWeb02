<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
</head>
<body>
    <center>
    <h3>FORM NILAI</h3> <hr>
    <form  class="form-horizontal" method = "POST" action = "nilai_siswa2.php">  
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-6">
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" value="" size="30" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
        <div class="col-6">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="BI">Bahasa Indonesia</option>
            <option value="KE">Komunikasi Efektif</option>
            <option value="PW">Pemograman Web</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-6">
        <input id="uts" name="nilai_uts" placeholder="Nilai UTS" type="text" value="" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-6">
        <input id="uas" name="nilai_uas" placeholder="Nilai UAS" type="text" value="" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
        <div class="col-6">
        <input id="tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" value="" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-6">
        <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>

    <?php
    ?>
    </center>
</body>
</html>