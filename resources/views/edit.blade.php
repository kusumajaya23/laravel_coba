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
            <form action="/mahasiswa/{{$mahasiswa->id}}" method="post">
                @csrf
                @method('PUT')
                    <!-- action attribute now points to "proses.php" to handle form submission -->
                    <fieldset class="form-group border p-3">
                        <legend class="w-auto px-2">Form Biodata</legend>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $mahasiswa->nama }}">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{ $mahasiswa->tgl_lahir }}">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label> <br>
                            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10" >{{ $mahasiswa->alamat }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value=""></option>
                                <option value="Hindu" {{ $mahasiswa->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Islam" {{ $mahasiswa->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen Katolik" {{ $mahasiswa->agama == 'Kristen Katolik' ? 'selected' : '' }}>Kristen Katolik</option>
                                <option value="Kristen Protestan" {{ $mahasiswa->agama == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan</option>
                                <option value="Budha" {{ $mahasiswa->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="universitas" class="form-label">Universitas</label>
                            <input type="text" name="universitas" class="form-control" id="universitas" value="{{ $mahasiswa->universitas }}">
                        </div>

                        <div class="mb-3">
                            <label for="fakultas" class="form-label">Fakultas</label>
                            <select name="fakultas" id="fakultas" class="form-control">
                                <option value=""></option>
                                <option value="teknik" {{ $mahasiswa->fakultas == 'teknik' ? 'selected' : '' }}>Teknik</option>
                                <option value="mipa" {{ $mahasiswa->fakultas == 'mipa' ? 'selected' : '' }}>Mipa</option>
                                <option value="kedokteran" {{ $mahasiswa->fakultas == 'kedokteran' ? 'selected' : '' }}>Kedokteran</option>
                                <option value="ekonomi" {{ $mahasiswa->fakultas == 'ekonomi' ? 'selected' : '' }}>Ekonomi Bisnis</option>
                                <option value="pariwisata" {{ $mahasiswa->fakultas == 'pariwisata' ? 'selected' : '' }}>Pariwisata</option>
                                <option value="peternakan" {{ $mahasiswa->fakultas == 'peternakan' ? 'selected' : '' }}>Peternakan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <select name="prodi" id="prodi" class="form-control">
                                <option value=""></option>
                                <option value="TI" {{ $mahasiswa->prodi == 'TI' ? 'selected' : '' }}>Teknologi Informasi</option>
                                <option value="elektro" {{ $mahasiswa->prodi == 'elektro' ? 'selected' : '' }}>Elektro</option>
                                <option value="sipil" {{ $mahasiswa->prodi == 'sipil' ? 'selected' : '' }}>Teknik Sipil</option>
                                <option value="arsitektur" {{ $mahasiswa->prodi == 'arsitektur' ? 'selected' : '' }}>Teknik Arsitektur</option>
                                <option value="lingkungan" {{ $mahasiswa->prodi == 'lingkungan' ? 'selected' : '' }}>Teknik Lingkungan</option>
                                <option value="mesin" {{ $mahasiswa->prodi == 'mesin' ? 'selected' : '' }}>Teknik Mesin</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" value="{{ $mahasiswa->nim }}">
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>