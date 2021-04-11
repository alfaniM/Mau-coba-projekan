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
            <h1>REKAPITULASI NILAI SEMINAR HASIL PENELITIAN</h1>
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
                    <td>Judul Proposal</td>
                    <td>:</td>
                    <td>Membuat Manajemen Sistem dengan CodeIgniter3</td>
                </tr>
                <tr>
                    <td>Hari/Tanggal</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tempat</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>

        </div>

        <div id="content" class="penilaian">
            <table cellpadding=5 border=1 rules=all>
                <tr>
                    <th style="width: 4%;">Jabatan Penilai</th>
                    <th style="width: 48%;">Nama Penilai </th>
                    <th style="width: 48%;">Nilai</th>
                    <th style="width: 48%;">Tanda Tangan</th>
                </tr>
                <tr>
                    <td>Pembimbing 1</td>
                    <td style="text-align: justify;"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pembimbing II</td>
                    <td style="text-align: justify;"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Penguji I</td>
                    <td style="text-align: justify;"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Penguji II</td>
                    <td style="text-align: justify;"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                    <td style="text-align: justify;">Nilai Rata-rata</td>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div id="content" class="keterangan">
            <table>
                <tr>
                    <td colspan="2">
                        <p>Hasil ujian rata-rata (Angka)</p>
                        <p>Nilai Akhir Seminar Hasil (Huruf)</p>
                        <p>
                            Ket:
                        </p>
                        <p style="position: sticky;"> 1. A= 80-100
                            2. B= 68-79
                            3. C= 56-67
                            4. D= 45-55
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
                    <td>Penguji,</td>
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