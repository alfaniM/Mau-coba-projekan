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
                            <div class="col-lg">
                                <div class="card-body">
                                    <div class="card-body">
                                        <form>
                                            <div class="col-md-6">
                                                <h4 class="page-header">Pilih Form </h4>
                                                <select class="form-control" onchange="pilihsurat(this.value)" name="id_surat">
                                                    <option value=""> Pilih Surat </option>
                                                    <option value="1 "> FORM PENILAIAN PRAKTEK KERJA LAPANGAN (PKL)</option>
                                                    <option value="2 "> FORM kedua </option>
                                                    <option value="3 "> FORM ketiga </option>
                                                </select>
                                                <hr>
                                            </div>

                                            <div class="row">
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
                                                <div class="1 box col-md-6">
                                                    <div id="form_surat">
                                                        <div class="mb-3">
                                                            <label class="form-label">Lokasi PKL</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lokasi PKL">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Tempat PKL</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat PKL">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Bagian/Bidang</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bagian/ Bidang">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Judul Laporan PKL</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Laporan PKL">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" id="btnsubmit" style=""> Download </button>
                                                </div>
                                                <!-- ENd form input 2 -->
                                                <div class="2 box">
                                                    <h1>Fani ganteng</h1>
                                                </div>
                                                <div class="3 box">
                                                    <h1>Emang Iya</h1>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>