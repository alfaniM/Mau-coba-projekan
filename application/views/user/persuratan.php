                    <!-- Fade In Utility
                    <div class="col-lg">

                        <div class="card position-relative">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
                            </div>
                            <div class="card-body">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="red">One</option>
                                    <option value="green">Two</option>
                                </select>
                            </div>

                            <div class="red box">You have selected <strong>red option</strong> so i am here</div>
                            <div class="green box">You have selected <strong>green option</strong> so i am here</div>



                            <div class="col-lg-6">
                                <h5> Data Diri </h5>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td> NIM </td>
                                            <td>:</td>
                                            <td> 11180910000021 </td>
                                        </tr>
                                        <tr>
                                            <td> Nama Mahasiswa </td>
                                            <td>:</td>
                                            <td>MUHAMMAD AULIA ALFANI </td>
                                        </tr>
                                        <tr>
                                            <td> Semester </td>
                                            <td>:</td>
                                            <td> 6 </td>
                                        </tr>

                                        <tr>
                                            <td> Status Mahasiswa </td>
                                            <td>:</td>
                                            <td> Aktif </td>
                                        </tr>

                                        <tr>
                                            <td> Jurusan </td>
                                            <td>:</td>
                                            <td> Teknik Informatika </td>
                                        </tr>

                                        <tr>
                                            <td> Tempat, Tanggal Lahir </td>
                                            <td>:</td>
                                            <td>Bekasi, 09 September 2000 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <div class="card-body">
                                        <form>
                                            <div class="col-md-12">
                                                <h4 class="page-header">Pilih Form </h4>
                                                <select class="form-control" onchange="pilihsurat(this.value)" name="id_surat">
                                                    <option value=""> Pilih Surat </option>
                                                    <option value="1 "> PENILAIAN PKL PEMBIMBING BIDANG PENULISAN LAPORAN (PKL)</option>
                                                    <option value="2 "> PENILAIAN PKL PEMBIMBING BIDANG KEGIATAN </option>
                                                    <option value="3 "> REKAPITULASI PENILAIAN PRAKTEK KERJA LAPANGAN (PKL) </option>
                                                    <option value="4 "> NILAI PENGUJI SEMINAR PROPOSAL PENELITIAN </option>
                                                    <option value="5 "> NILAI PEMBIMBING SEMINAR PROPOSAL PENELITIAN </option>
                                                    <option value="6 "> REKAPITULASI NILAI SEMINAR PROPOSAL PENELITIAN </option>
                                                    <option value="7 "> NILAI PEMBIMBING SEMINAR HASIL PENELITIAN </option>
                                                    <option value="8 "> NILAI PENGUJI SEMINAR HASIL PENELITIAN </option>
                                                    <option value="9 "> REKAPITULASI NILAI SEMINAR HASIL PENELITIAN </option>
                                                    <option value="10 "> NILAI SKRIPSI UNTUK PEMBIMBING </option>
                                                    <option value="11 "> NILAI SKRIPSI UNTUK PENGUJI </option>
                                                    <option value="12 "> BERITA ACARA UJIAN SKRIPSI </option>
                                                </select>
                                                <hr>
                                            </div>

                                            <div class="row">
                                                <!-- BIODATA -->
                                                <div class="col-md-6">
                                                    <h5>Profil Mahasiswa</h5>
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td> NIM </td>
                                                                <td>:</td>
                                                                <td> 11180910000021 </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Nama Mahasiswa </td>
                                                                <td>:</td>
                                                                <td>MUHAMMAD AULIA ALFANI </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Semester </td>
                                                                <td>:</td>
                                                                <td> 6 </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Status Mahasiswa </td>
                                                                <td>:</td>
                                                                <td> Aktif </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Jurusan </td>
                                                                <td>:</td>
                                                                <td> Teknik Informatika </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Tempat, Tanggal Lahir </td>
                                                                <td>:</td>
                                                                <td>Bekasi, 09 September 2000 </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- form input 1 -->
                                                <div class="1 box col-md">
                                                    <div id="form_surat">
                                                        <div class="mb-3">
                                                            <label class="form-label">Tempat PKL</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat PKL">
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Judul Laporan </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Lama PKL (Bulan)</label>
                                                            <input type="number" name="lama_pkl" class="form-control">
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-info" href="<?= base_url('user/pdf'); ?>"><i class="fa fa-file"></i> Download</a>
                                                    <!-- <button type="submit" class="btn btn-info" id="btnsubmit"> Download </button> -->
                                                </div>
                                                <!-- ENd form input 2 -->
                                                <div class="2 box col-md">
                                                    <div id="form_surat">
                                                        <div class="mb-3">
                                                            <label class="form-label">Tempat PKL</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat PKL">
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Judul Laporan </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Lama PKL (Bulan)</label>
                                                            <input type="number" name="lama_pkl" class="form-control">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" id="btnsubmit" style=""> Download </button>

                                                </div>
                                                <!-- ====================================== FORM REKAPITULASI ====================================== -->
                                                <div class="3 box col-md">
                                                    <div id="form_surat">
                                                        <div class="form-group">
                                                            <label> Judul PKL </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hari/Tanggal </label>
                                                            <input type="date" name="periode_awal" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Waktu</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Waktu">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Tempat PKL</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat PKL">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" id="btnsubmit" style=""> Download </button>
                                                </div>
                                                <!-- ====================================== NILAI PENGUJI SEMINAR PROPOSAL PENELITIAN ====================================== -->
                                                <div class="4 box col-md">
                                                    <div id="form_surat">
                                                        <div class="form-group">
                                                            <label> Judul Penelitian </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hari/Tanggal </label>
                                                            <input type="date" name="periode_awal" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Waktu</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Waktu">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Tempat </label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat PKL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================================== NILAI PEMBIMBING SEMINAR PROPOSAL PENELITIAN ====================================== -->
                                                <div class="5 box col-md">
                                                    <div id="form_surat">
                                                        <div class="form-group">
                                                            <label> Judul Penelitian </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hari/Tanggal </label>
                                                            <input type="date" name="periode_awal" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Waktu</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Waktu">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Tempat</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat PKL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================================== REKAPITULASI NILAI SEMINAR PROPOSAL PENELITIAN ====================================== -->
                                                <div class="6 box col-md">
                                                    <div id="form_surat">
                                                        <div class="form-group">
                                                            <label> Judul Proposal </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hari/Tanggal </label>
                                                            <input type="date" name="periode_awal" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Waktu</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Waktu">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Tempat</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat PKL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================================== NILAI PEMBIMBING SEMINAR HASIL PENELITIAN ====================================== -->
                                                <div class="7 box col-md">
                                                    <div id="form_surat">
                                                        <div class="form-group">
                                                            <label> Judul Skripsi </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Seminar</label>
                                                            <input type="date" name="periode_awal" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================================== NILAI PENGUJI SEMINAR HASIL PENELITIAN ====================================== -->
                                                <div class="8 box col-md">
                                                    <div id="form_surat">
                                                        <div class="form-group">
                                                            <label> Judul Skripsi </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Seminar</label>
                                                            <input type="date" name="periode_awal" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================================== REKAPITULASI NILAI SEMINAR HASIL PENELITIAN ====================================== -->
                                                <div class="9 box col-md">
                                                    <div id="form_surat">
                                                        <div class="form-group">
                                                            <label> Judul PRoposal </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hari/Tanggal </label>
                                                            <input type="date" name="periode_awal" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Waktu</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Waktu">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Tempat</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat PKL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================================== NILAI SKRIPSI UNTUK PEMBIMBINGs ====================================== -->
                                                <div class="10 box col-md">
                                                    <div id="form_surat">
                                                        <div class="form-group">
                                                            <label> Judul </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Dosen Pembimbing 1
                                                            </label>
                                                            <select class="form-control" name="dospem1" onchange="dospema1(this.value)">
                                                                <option value="">Pilih Dospem 1</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Dosen Pembimbing 2
                                                            </label>
                                                            <select class="form-control" name="dospem1" onchange="dospema1(this.value)">
                                                                <option value="">Pilih Dospem 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Dosen Penguji 1
                                                            </label>
                                                            <select class="form-control" name="dospem1" onchange="dospema1(this.value)">
                                                                <option value="">Pilih Dospem 1</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Dosen Penguji 2
                                                            </label>
                                                            <select class="form-control" name="dospem1" onchange="dospema1(this.value)">
                                                                <option value="">Pilih Dospem 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Sidang </label>
                                                            <input type="date" name="periode_awal" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================================== NILAI SKRIPSI UNTUK PENGUJI ====================================== -->
                                                <div class="11 box col-md">
                                                    <div id="form_surat">
                                                        <div class="form-group">
                                                            <label> Judul </label>
                                                            <textarea class="form-control" name="judul_skripsi" rows="5" required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Dosen Pembimbing 1
                                                            </label>
                                                            <select class="form-control" name="dospem1" onchange="dospema1(this.value)">
                                                                <option value="">Pilih Dospem 1</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Dosen Pembimbing 2
                                                            </label>
                                                            <select class="form-control" name="dospem1" onchange="dospema1(this.value)">
                                                                <option value="">Pilih Dospem 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Dosen Penguji 1
                                                            </label>
                                                            <select class="form-control" name="dospem1" onchange="dospema1(this.value)">
                                                                <option value="">Pilih Dospem 1</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Dosen Penguji 2
                                                            </label>
                                                            <select class="form-control" name="dospem1" onchange="dospema1(this.value)">
                                                                <option value="">Pilih Dospem 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Sidang </label>
                                                            <input type="date" name="periode_awal" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================================== NILAI SKRIPSI UNTUK PENGUJI ====================================== -->
                                                <div class="12 box col-md">
                                                    <h1>Fani ganteng</h1>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>