<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Data</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-5">
            <form name="form" method="POST" action="/mahasiswa" >
            @csrf
                    <!-- action attribute now points to "proses.php" to handle form submission -->
                    <fieldset class="form-group border p-3">
                        <legend class="w-auto px-2">Form Biodata</legend>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label> <br>
                            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value=""></option>
                                <option value="Hindu">Hindu</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="universitas" class="form-label">Universitas</label>
                            <input type="text" name="universitas" class="form-control" id="universitas">
                        </div>

                        <div class="mb-3">
                            <label for="fakultas" class="form-label">Fakultas</label>
                            <select name="fakultas" id="fakultas" class="form-control">
                                <option value=""></option>
                                <option value="teknik">Teknik</option>
                                <option value="mipa">Mipa</option>
                                <option value="kedokteran">Kedokteran</option>
                                <option value="ekonomi">Ekonomi Bisnis</option>
                                <option value="pariwisata">Pariwisata</option>
                                <option value="peternakan">Peternakan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <select name="prodi" id="prodi" class="form-control">
                                <option value=""></option>
                                <option value="TI">Teknologi Informasi</option>
                                <option value="elektro">Elektro</option>
                                <option value="sipil">Teknik Sipil</option>
                                <option value="arsitektur">Teknik Arsitektur</option>
                                <option value="lingkungan">Teknik Lingkungan</option>
                                <option value="mesin">Teknik Mesin</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim">
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function validateForm() {
        var nama = document.getElementById("nama").value;
        var tahunLahir = document.getElementById("lahir").value;
        var alamat = document.getElementById("alamat").value;
        var agama = document.getElementById("agama").value;
        var universitas = document.getElementById("univ").value;
        var fakultas = document.getElementById("fakultas").value;
        var prodi = document.getElementById("prodi").value;
        var nim = document.getElementById("nim").value;

        // ... (validasi lainnya seperti yang ada di kode Anda)
        var namaRegex = /^[a-zA-Z\s]+$/;
            if (!nama.match(namaRegex)) {
                alert("Nama hanya boleh berisi huruf dan spasi.");
                return false;
            }

            if (tahunLahir === "") {
                alert("Tahun lahir kosong.");
                return false;
            }

            if (alamat.trim() === "") {
                alert("Alamat harus diisi.");
                return false;
            }

            if (agama === "") {
                alert("Pilih Agama.");
                return false;
            }

            if (universitas.trim() === "") {
                alert("Universitas harus diisi.");
                return false;
            }

            if (fakultas === "") {
                alert("Pilih Fakultas.");
                return false;
            }

            if (prodi === "") {
                alert("Pilih Program Studi.");
                return false;
            }

            if (nim.length !== 10 || isNaN(nim)) {
                alert("NIM harus terdiri dari 10 digit angka.");
                return false;
            }

        // Data yang akan dikirim melalui Ajax
        var formData = {
            nama: nama,
            tahunLahir: tahunLahir,
            alamat: alamat,
            agama: agama,
            universitas: universitas,
            fakultas: fakultas,
            prodi: prodi,
            nim: nim
        };

        $.ajax({
            type: "POST",
            url: "/submit-form", // Ganti dengan URL yang sesuai di proyek Laravel Anda
            data: formData,
            success: function (response) {
                if (response.success) {
                    alert("Data anda berhasil disimpan.");
                    // Lakukan aksi lain, seperti mengarahkan pengguna atau mereset formulir
                } else {
                    alert("Terjadi kesalahan saat menyimpan data.");
                }
            }
        });

        return false; // Mencegah formulir dikirim secara tradisional
    }
</script>


</body>
</html>