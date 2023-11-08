<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tampilan Data</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <form action="mahasiswa/create" method="get">
                    <button type="submit">Tambah Data</button>
                </form>
                <table class="table text-center">
                    <thead>
                        <tr class="table-dark">
                            <th >No</th>
                            <th >Nama</th>
                            <th >Universitas</th>
                            <th >Fakultas</th>
                            <th >Program Studi</th>
                            <th >NIM</th>
                            <th >Action</th>

                            @foreach ($datamhs as $mahasiswa)
                                </tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$mahasiswa->nama}}</td>
                                    <td>{{$mahasiswa->universitas}}</td>
                                    <td>{{$mahasiswa->fakultas}}</td>
                                    <td>{{$mahasiswa->prodi}}</td>
                                    <td>{{$mahasiswa->nim}}</td>
                                    <td>
                                        <div style="display: inline-block;">
                                            <form action="/mahasiswa/{{$mahasiswa->id}}/edit" method="get">
                                                <button type="submit">Edit</button>
                                            </form>
                                        </div>

                                        <div style="display: inline-block;">
                                            <form action="/mahasiswa/{{$mahasiswa->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>

                                    </td>
                                    
                                </tr>
                            @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>