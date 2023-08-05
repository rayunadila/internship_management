{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Presensi Harian</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <img src="images/SI_INNA.png" width="100px">
    <h5 class="text-center">Laporan Presensi Harian</h5>
    <br>
    <h6>Nama : {{ Auth::user()->name }}</h6>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Status Kehadiran</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @php
                $i = 1;
            @endphp
            @forelse ($data as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Data Tidak Ada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html> --}}

{{--
     --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Presensi Peserta PKL </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <table>
        <tr>
            <th rowspan="4" width="250px">
                <center><img src="images/kop.png" alt="" width="100px"></center>
            </th>
            <th>
                <h5 class="text-center">PEMERINTAH PROVINSI SUMATERA SELATAN</h5>
            </th>
        </tr>

        <tr>

            <th>
                <h4 class="text-center">DINAS PEKERJAAN UMUM BINA MARGA DAN TATA RUANG</h4>
            </th>
        </tr>

        <tr>

            <th>
                <<h6 class="text-center">Jln. Ade Irma Nasution No.10  Telp. (0711) 313431 </h6>
            </th>
        </tr>

        <tr>

            <th>
                <h6 class="text-center">PALEMBANG</h6>
            </th>
        </tr>
    </table>

    <hr style=" border-bottom: 7px double #333; border-top: 3px double #333  "><br>
    <h5 class="text-center">Laporan Data Presensi Peserta PKL</h5>
    <br>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>No.</th>
                <th>Nama Siswa/Mahasiswa</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @php
                $i = 1;
            @endphp
            @forelse ($data as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item['apprentince']['name'] }}</td>
                    <td>{{ $item->present_in }}</td>
                    <td>{{ $item->present_out }}</td>
                    <td>{{ $item->status }}</td>
                </tr>

            @empty
                <tr>
                    <td colspan="4" class="text-center">Data Tidak Ada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
