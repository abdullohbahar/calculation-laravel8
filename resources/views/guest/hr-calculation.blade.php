<!DOCTYPE html>
<html>

<head>
    <title>KALKULASI HR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 mt-3 mb-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>HR HEALTH CHECK</h1>
                    </div>
                    <div class="card-body">
                        <form id="wizardForm" action="{{ route('result.calculation.hr.form') }}" method="POST">
                            @csrf
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- Step 1 --}}
                            @include('guest.components.personal-data')
                            {{-- Step 2 --}}
                            <div class="tab" style="display: none;">
                                <h5>1. Semua calon karyawan mengirimkan berkas lamaran pekerjaan saat
                                    seleksi awal/ administrasi</h5>
                                <div class="form-group">
                                    <input type="radio" name="question1" value="Ya" onclick="hideRadioAlert(this)"
                                        required id="question1Ya">
                                    <label for="question1Ya">Ya</label> <br>
                                    <input type="radio" name="question1" value="Tidak" onclick="hideRadioAlert(this)"
                                        id="question1Tidak"> <label for="question1Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert" style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>2. Penggunaan lembar penilaian wawancara saat seleksi lanjutan</h5>
                                <div class="form-group">
                                    <input type="radio" name="question2" value="Ya" onclick="hideRadioAlert(this)"
                                        required id="question2Ya">
                                    <label for="question2Ya">Ya</label> <br>
                                    <input type="radio" name="question2" value="Tidak" onclick="hideRadioAlert(this)"
                                        id="question2Tidak"> <label for="question2Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert" style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>3. Semua karyawan memiliki kontrak kerja</h5>
                                <div class="form-group">
                                    <input type="radio" name="question3" value="Ya" onclick="hideRadioAlert(this)"
                                        required id="question3Ya">
                                    <label for="question3Ya">Ya</label> <br>
                                    <input type="radio" name="question3" value="Tidak" onclick="hideRadioAlert(this)"
                                        id="question3Tidak"> <label for="question3Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert" style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>4. Pembaruan kontrak kerja karyawan setiap periode dan/ jenjang
                                    tertentu</h5>
                                <div class="form-group">
                                    <input type="radio" name="question4" value="Ya" onclick="hideRadioAlert(this)"
                                        required id="question4Ya">
                                    <label for="question4Ya">Ya</label> <br>
                                    <input type="radio" name="question4" value="Tidak" onclick="hideRadioAlert(this)"
                                        id="question4Tidak">
                                    <label for="question4Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert" style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>5. Memiliki buku pegangan karyawan yang merinci peraturan, kebijakan
                                    & SOP perusahaan</h5>
                                <div class="form-group">
                                    <input type="radio" name="question5" value="Ya" onclick="hideRadioAlert(this)"
                                        required id="question5Ya">
                                    <label for="question5Ya">Ya</label> <br>
                                    <input type="radio" name="question5" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question5Tidak">
                                    <label for="question5Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            {{-- Step 3 --}}
                            <div class="tab" style="display: none;">
                                <h5>6. Pembaruan buku pegangan karyawan sesuai undang-undang
                                    ketenagakerjaan yang berlaku</h5>
                                <div class="form-group">
                                    <input type="radio" name="question6" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question6Ya">
                                    <label for="question6Ya">Ya</label> <br>
                                    <input type="radio" name="question6" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question6Tidak">
                                    <label for="question6Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>7. Menerapkan prosedur disipliner tertulis (yang mencakup klausul
                                    pemberhentian), pemecatan, banding & pengaduan?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question7" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question7Ya">
                                    <label for="question7Ya">Ya</label> <br>
                                    <input type="radio" name="question7" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question7Tidak">
                                    <label for="question7Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>8. Prosedur di poin sebelumnya telah sesuai dengan kode etik
                                    Disnaker?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question8" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question8Ya">
                                    <label for="question8Ya">Ya</label> <br>
                                    <input type="radio" name="question8" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question8Tidak">
                                    <label for="question8Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>9. Peninjauan aturan kerja, benefit & compensation serta SOP
                                    perusahaan secara rutin sesuai perkembangan bisnis dan peraturan
                                    undang-undang yang berlaku</h5>
                                <div class="form-group">
                                    <input type="radio" name="question9" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question9Ya">
                                    <label for="question9Ya">Ya</label> <br>
                                    <input type="radio" name="question9" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question9Tidak">
                                    <label for="question9Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>10. Memiliki konsultan profesional untuk memandu Anda dalam masalah
                                    atau perselisihan karyawan?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question10" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question10Ya"> <label
                                        for="question10Ya">Ya</label> <br>
                                    <input type="radio" name="question10" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question10Tidak">
                                    <label for="question10Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" class="btn btn-warning" id="prevBtn"
                                        onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" class="btn btn-info" id="nextBtn"
                                        onclick="validateForm()">Next</button>
                                    <button type="submit" class="btn btn-success" id="submitBtn"
                                        style="display: none;">Lihat Hasil</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/script/script.js?date=' . now()) }}"></script>
</body>

</html>
