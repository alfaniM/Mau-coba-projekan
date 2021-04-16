<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
    html {
        width: 21cm;
        height: 29.7cm;
    }

    header,
    main,
    footer {
        float: left;
        box-sizing: border-box;
        width: 780px;
    }

    .head1 {
        float: left;
        box-sizing: border-box;
        width: 50%;
        height: 100px;
        border: solid 2px black;
    }

    .head2 {
        float: left;
        margin-left: -2px;
        box-sizing: border-box;
        width: 17%;
        height: 100px;
        border: solid black 2px;
    }

    .head3 {
        float: left;
        padding-top: 5px;
        margin-left: -2px;
        box-sizing: border-box;
        width: 33%;
        height: 100px;
        border: solid black 2px;
    }

    .logo img {
        float: left;
        margin: 6px;
        width: 90px;
    }

    .head1 table {
        padding-top: 7px;
        padding-left: 10px;
        text-align: justify;
        font-family: 'Times New Roman', Times, serif;
        font-size: 14px;
    }

    .head1 table td {
        font-size: 13px;
        text-align: justify;
        font-style: italic;
    }

    .head2 table {
        padding-top: 25px;
        padding-left: 12px;
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: 14px;
    }

    .head3 table {
        padding-left: 5px;
        text-align: left;
        font-family: 'Times New Roman', Times, serif;
        font-size: 12px;
    }

    .head3 table td {
        text-align: justify;
        font-family: 'Times New Roman', Times, serif;
        font-size: 14px;
    }

    .smalltron {
        float: left;
        margin-top: -1px;
        border: solid 2px black;
        width: 99%;
        text-align: center;
    }

    .smalltron h1 {
        font-family: 'Times New Roman', Times, serif;
        font-size: 16px;
    }

    .data_diri table {
        float: left;
        padding-top: 30px;
        padding-left: 50px;
        margin-top: 10px;
        width: 50%;
        text-align: justify;
    }

    .penilaian table {
        float: left;
        width: 700px;
        text-align: center;
        margin-top: 50px;
        margin-left: 45px;
    }

    .keterangan table {
        float: left;
        width: 700px;
        text-align: center;
        margin-left: 45px;
    }

    .ttd table {
        float: left;
        width: 350px;
        text-align: justify;
        margin-top: 50px;
        margin-left: 400px;
    }
</style>

<body>
    <header>
        <div class="head1">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <table>
                <tr>
                    <th>UNIVERSITAS ISLAM NEGERI</th>
                </tr>
                <tr>
                    <th>SYARIF HIDAYATULLAH JAKARTA</th>
                </tr>
            </table>
            <table>
                <tr>
                    <th>FAKULTAS SAINS DAN TEKNOLOGI</th>
                </tr>
                <tr>
                    <td>Jl. Ir. H. Juanda No 95 Ciputat 15412 Indonesia</td>
                </tr>
            </table>
        </div>
        <div class="head2">
            <table cellpadding=10>
                <tr>
                    <th>FORM (FR)</th>
                </tr>
            </table>
        </div>
        <div class="head3">
            <table>
                <tr>
                    <td>No. Dok</td>
                    <td style="padding-left: 30px;">:</td>
                    <td>FST–AKM–FR–020</td>
                </tr>
                <tr>
                    <td>Tgl. Terbit</td>
                    <td style="padding-left: 30px;">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>No. Revisi</td>
                    <td style="padding-left: 30px;">:</td>
                    <td>001</td>
                </tr>
                <tr>
                    <td>Hal</td>
                    <td style="padding-left: 30px;">:</td>
                    <td>1/1</td>
                </tr>
            </table>
        </div>
    </header>
    <main>
        <div class="smalltron">
            <h1>NILAI PEMBIMBING SEMINAR HASIL PENELITIAN</h1>
        </div>
        <div id="content" class="data_diri">
            <table cellpadding=5>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Alexander Punjab</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>Teknik Informatika</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>TU FST</td>
                </tr>
                <tr>
                    <td>Judul Skripsi</td>
                    <td>:</td>
                    <td>Membuat Manajemen Sistem dengan CodeIgniter3</td>
                </tr>
                <tr>
                    <td>Tanggal Seminar</td>
                    <td>:</td>
                    <td></td>
                </tr>

            </table>

        </div>
        <div id="content" class="penilaian">
            <table cellpadding=5 border=1 rules=all>
                <tr>
                    <th style="width: 4%;">NO</th>
                    <th style="width: 48%;">Aspek Penilaian</th>
                    <th style="width: 48%;">Nilai</th>
                    <th style="width: 48%;">Keterangan</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td style="text-align: justify;">Kedispilinan dan ketepatan waktu menyelesaikan skripsi (30%).</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td style="text-align: justify;">Sistematika dan Penulisan skripsi (20%).</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td style="text-align: justify;">Kejelasan dan sikap dalam memberikan tanggapan pertanyaan, kritik
                        dan saran (20%).</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td style="text-align: justify;">Penguasaan materi penelitian (20%)</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td style="text-align: justify;">Bahasa atau teks presentasi dalam asing (10%)
                        (Inggris/Arab, nilai 90-100). Presentasi dalam bahasa Indonesia
                        (nilai 70-80).
                    </td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td style="text-align: justify;">Jumlah</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: justify;">Rata-rata</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div id="content" class="keterangan">
            <table>
                <tr>
                    <td colspan="2">
                        <p>Keterangan: Nilai diberikan dalam bentuk angka dengan range 0-100
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </main>
    <footer>
        <div id="content" class="ttd">
            <table>
                <tr>
                    <td>Jakarta,</td>
                </tr>
                <tr>
                    <td>Dosen Pembimbing,</td>
                </tr>
                <tr>
                    <td><br><br><br>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>NIP.</td>
                </tr>
            </table>
        </div>
    </footer>
</body>

</html>