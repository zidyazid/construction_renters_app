<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- my custom css -->
    {{-- <link rel="stylesheet" href="{{ asset('css/my_custom.css') }}"> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Surat Perjanjian</title>

    <style>
        p{
            font-size:16px;
            font-family: 'Times New Roman'
        }
        ul{
            font-size:16px;
            font-family: 'Times New Roman'
        }
        ol{
            font-size:16px;
            font-family: 'Times New Roman'
        }
        span{
            font-size:16px;
            font-family: 'Times New Roman'
        }
        td{
            font-size:16px;
            font-family: 'Times New Roman'
        }
    </style>

  </head>
  <body>
    
    <h2>KOP SURAT</h2>
    <hr class="divider bg-dark">
    <hr class="divider bg-dark" height="10">

    <div class="container">
        <center><strong>SURAT PERJANJIAN SEWA MENYEWA ALAT BERAT</strong></center>
        <br>
    </div>
   <p>
        Kami yang bertanda tangan dibawah ini:
        <br>
        <ul>
            <table>
                <tbody>
                    <tr class="text-start">
                        <td>Nama</td><td>:</td>
                    </tr>
                    <tr>
                        <td>Alamat</td><td>:</td>
                    </tr>
                    <tr>
                        <td>No.KTP</td><td>:</td>
                    </tr>
                    <tr>
                        <td>Bertindak Selaku</td><td>:</td>
                    </tr>
                </tbody>
            </table>
        </ul>

   </p> 

    <p>
        Untuk selanjutnya disebut sebagai pihak pertama
        <br>
        <ul>
            <table>
                <tbody>
                    <tr>
                        <td class="text-start">Nama Perusahaan</td><td class="text-start">:</td><td>{{ $dataRenter->nama_perusahaan }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td><td>:</td><td>{{ $dataRenter->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td><td>:</td><td>{{ $dataRenter->nama_penyewa }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td><td>:</td><td>{{ $dataRenter->alamat_penyewa }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td><td>:</td><td>{{ $dataRenter->nik }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td><td>:</td><td>{{ $dataRenter->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Bertindak Selaku</td><td>:</td><td>Penyewa/Perental</td>
                    </tr>
                </tbody>
            </table>
        </ul>
    </p>
    <p>
        Untuk selanjutnya disebut sebagai pihak kedua
    </p>
  
    <span>
        Pada hari ini {{ date('d M Y') }}, kedua belah pihak telah sepakat untuk mengadakan perjanjian sewa menyewa dengan rincian sebagai berikut:
    </span> 
 
    <br>
    <ol>
        <li>
            Pihak pertama menyewakan kepada pihak kedua, 1 (satu) unit alat berat:
            <br>
            Jenis :
            <br>
            Type   :
            <br>
            Dengan masa sewa.....Jam x Rp...... = Rp..........- Dengan biaya Mobilisasi sebesar Rp.........ditanggung oleh Pihak kedua/Prental (P/P) pembayaran didepan dengan opsi jika dibutuhkan jam kontrak ini berlaku.
        </li>
        <li>
            Masa sewa tetap dihitung satu hari, meskipun alat berat berkerja tidak mencapai satu hari, karena operator diminta stand by oleh pihak kedua/ penyewa atau stand by total karena terjadi hujan atau bencana alam, tidak ada BBM atau dokumen belum selesai oleh pihak ketiga adalah resiko tanggung jawab sepenuhnya oleh pihak kedua dan terlepas dari segala tuntutan dari pihak ketiga, sengketa dan pejabat berwenang dan tidak menjadikan alat bukti sitaan dll.
        </li>
        <li>
            Pihak kedua harus segera memberitahukan kepada pihak pertama apabila alat berat tidak berkerja dikarenakan alat berat tersebut rusak, maka jam kerja tidak dihitung dan diganti dihari berikutnya atau operator alat berat tersebut berhalangan sakit.
        </li>
        <li>
            Begitu alat berat sampai dilokasi pihak kedua/penyewa, keesokan harinya mulai berkerja, maka dihitung jam kerja.
        </li>
        <li>
            Alat berat tersebut diatas berkerja dilokasi ................ dengan jenis pekerjaan ................ Perhitungan sewa menyewa alat berat untuk kedua belah pihak didasarkan kepada timesheet kerja yaitu dari pihak pertama/ pemilik dikuasakan kepada operator dan pihak kedua dikuasakan kepada mandor lapangan/ lokasi untuk persetujuan tanda tangan jam kerja alat berat tersebut. Pihak pertama tidak boleh menyewakan alat berat tersebut kepada pihak ketiga selama pihak kedua telah melaksanakan kewajibannya. Untuk membayar sewa alat berat tersebut setiap bulan dibayar dibuka sebelum alat berat tersebut berkerja. 
        </li>
        <li>
            Sistem pembayaran adalah cash atau tunai dibayar dimuka untuk masa sewa 2 hari sebelum alat berangkat.
        </li>
        <li>
            Tanggung jawab pihak pertama:
            <ol type="a">
                <li>Menyewakan alat berat dalam keadaan baik/ siap operasi.</li>
                <li>Menyediakan operator dan helper.</li>
                <li>Menyediakan oil mesin, oil hidrolik dan spare part.</li>
            </ol>
        </li>
        <li>
            Tanggung jawab pihak kedua:
            <ol type="a">
                <li>Menyediakan solar/ BBM untuk alat tersebut ( cat: BBM di atas ¼ tangki)</li>
                <li>Biaya makan sebesar Rp. 150.000/operator per hari dan jika ada kerusakan, mekanik 
                    datang juga ditanggung makan dan pemondokan.</li>
                <li>Pemondokan operator/ helper ditempat lokasi.</li>
                <li>Menyediakan transportasi untuk operator dan helper jika jarak pemondokan dan lokasi 
                    tempat alat berat kerja jauh.</li>
                <li>Keamanan alat berat tersebut dilokasi kerja sepenuhnya tanggung jawab penyewa.</li>
                <li>Jika di lokasi hujan di kenai cas 4 jam</li>
                <li>Biaya penyeberangan dan asuransi penyeberangan di tanggung oleh pihak kedua.</li>
                <li>Pihak kedua wajib mengganti semua kerugian –kerugian atas setiap kehilangan semua 
                    peralatan yang terjadi karena kesengajaan ataupun kelalaian dari pihak kedua.</li>
                <li>Pihak kedua tidak akan melibatkan pihak pertama apabila ada sengketa lahan 
                    pengerjaan yang berkaitan dengan hukum pemerintah,apabila ada huru hara atau aksi 
                    masa yang mengakibatkan alat mengalami kerusakan ,alat terbakar/dibakar sengaja 
                    atau pun tidak disengaja akan menjadi tanggung jawab pihak kedua sepenuhnya. Dan 
                    pihak kedua harus mengganti 100% kerugian alat yang rusak,terbakar/dibakar pada 
                    pihak pertama (pemiik).
                </li>
            </ol>
        </li>
        <li>
            Alat berat setelah sampai dilokasi pihak kedua, keamanan alat berat menjadi tanggung jawab 
            sepenuhnya oleh pihak kedua. Apabila terjadi kehilangan atau pencurian, spare part 
            perlengkapan yang ada pada alat berat dilokasi pengawasan pihak kedua, maka menjadi 
            tanggung jawab sepenuhnya oleh pihak kedua. Maka dari itu pihak kedua bersedia ganti rugi 
            kepada pihak pertama dengan syarat untuk ganti rugi tidak menunggu proses oleh pihak 
            kepolisian maupun keputusan pengadilan setempat agar alat berat tersebut dapat bekerja 
            seperti semula.
        </li>
        <li>
            Apabila pihak kedua tidak melaksanakan kewajibannya untuk setiap kali perpanjangan sewa 
            alat berat tersebut dibayar terlebih dahulu setiap bulan uang sewa kepada pihak pertama, 
            maka pihak pertama sendiri dapat menarik kembali alat berat tersebut atau melalui pihak 
            yang berwajib untuk menarik kembali alat berat yang disewa oleh pihak kedua, yang tidak 
            perlu melalui keputusan pengadilan sewaktu menarik kembali alat berat dari pihak kedua 
            maupun pihak pengawasnya dilapangan tidak berhak mencegat dan menuntut alasan apapun 
            kepada pihak pertama dan segala biaya yang timbul atas penarikan alat berat tersebut 
            menjadi tanggung jawab sepenuhnya oleh pihak kedua.
        </li>
        <li>
            Apabila pihak kedua merasa perlu untuk memperpanjang penyewaan alat berat, maka pihak 
            kedua dapat mengajukan perpanjangan dengan memberitahukan terlebih dahulu kepada 
            pihak pertama sekurang- kurangnya 3 (tiga) hari sebelum kontrak berakhir, dan biaya sewa 
            perpanjangan sudah dilunasi oleh pihak kedua selambat- lambatnya pada hari kedua 
            perpanjangan dengan harga yang sama.
        </li>
        <li>
            Apabila terjadi perselisihan antara pihak kedua dengan pihak pertama harus dapat 
            diselesaikan secara musyawarah terlebih dahulu, dan jika tidak dapat diselesaikan maka 
            pihak kedua dan pihak pertama telah sepakat untuk menyelesaikan melalui jalur hukum yang 
            tetap dan tidak akan berubah. Di Kapaniteraan Pengadilan Negeri Pekanbaru.
        </li>

    </ol>

    <p>
        Demikian surat perjanjian sewa menyewa alat berat ini dibuat dengan sebenar-benarnya di 
        tangga,bulan dan tahun tersebut diatas serta dibubuhi matrai yang cukup masing-masing 
        mempunyai kekauatan hukum yang sama. Saksi ikut menandatangani dibawah ini setelah membaca 
        bersama dan dapat dipergunakan dimanapun.
    </p>

    <p>
    <div class="container-fluid">
        {{-- <div class="row">
            <div class="justify-content-center"> --}}
                <table class="table table-borderless">
                    <tr>
                        <td colspan="2" class="text-center"></td><td class="text-center">Pekanbaru, {{ date('d M Y') }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">Pihak Pertama</td> <td></td> <td class="text-center">Pihak Kedua</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"></td>
                    </tr>
                    <tr>
                        <td scope="row" class="text-center">(.........................)</td> <td></td> <td class="text-center">(..............................)</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">Saksi</td>
                    </tr>
                    <tr>
                        <td class="text-center">Saksi Pertama</td> <td></td> <td class="text-center">Saksi Kedua</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"></td>
                    </tr>
                    <tr>
                        <td scope="row" class="text-center">(.........................)</td> <td></td> <td class="text-center">(..............................)</td>
                    </tr>
                </table>
            {{-- </div>
        </div> --}}
    </div>

    </p>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>