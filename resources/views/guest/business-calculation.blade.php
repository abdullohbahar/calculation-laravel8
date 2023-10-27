<!DOCTYPE html>
<html>

<head>
    <title>KALKULASI BISNIS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 mt-3 mb-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>BUSINESS HEALTH CHECK</h1>
                    </div>
                    <div class="card-body">
                        <form id="wizardForm" action="{{ route('result.calculation.business.form') }}" method="POST">
                            @csrf
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- Step 1 --}}
                            @include('guest.components.personal-data')
                            {{-- Step 2 --}}
                            <div class="tab" style="display: none;">
                                <h5>1.Memiliki layanan pelanggan dan hasil yang efisien
                                    karena perusahaan telah menerapkan sistem
                                    bisnis yang konsisten dan teratur.</h5>
                                <div class="form-group">
                                    <input type="radio" name="question1" value="1" onclick="hideRadioAlert(this)"
                                        required id="question11">
                                    <label for="question11">1</label> <br>
                                    <input type="radio" name="question1" value="2" onclick="hideRadioAlert(this)"
                                        id="question12"> <label for="question12">2</label><br>
                                    <input type="radio" name="question1" value="3" onclick="hideRadioAlert(this)"
                                        id="question13"> <label for="question13">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert" style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>2. Telah mendapatkan "nilai" dari investasi pada
                                    SDM. Tanggung jawab & hasil pekerjaan karyawan
                                    sudah sesuai harapan.</h5>
                                <div class="form-group">
                                    <input type="radio" name="question2" value="1" onclick="hideRadioAlert(this)"
                                        required id="question21">
                                    <label for="question21">1</label> <br>
                                    <input type="radio" name="question2" value="2" onclick="hideRadioAlert(this)"
                                        id="question22"> <label for="question22">2</label><br>
                                    <input type="radio" name="question2" value="3" onclick="hideRadioAlert(this)"
                                        id="question23"> <label for="question23">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert" style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>3. Konsisten memenuhi arus
                                    kas keuangan serta komitmen dengan
                                    proyeksi keuangan dan anggaran?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question3" value="1" onclick="hideRadioAlert(this)"
                                        required id="question31">
                                    <label for="question31">1</label> <br>
                                    <input type="radio" name="question3" value="2" onclick="hideRadioAlert(this)"
                                        id="question32"> <label for="question32">2</label><br>
                                    <input type="radio" name="question3" value="3" onclick="hideRadioAlert(this)"
                                        id="question33"> <label for="question33">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert" style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>4. Pelanggan merasa mudah dalam mengakses
                                    produk/ jasa kita. Tidak sulit memproses
                                    pembayaran.</h5>
                                <div class="form-group">
                                    <input type="radio" name="question4" value="1" onclick="hideRadioAlert(this)"
                                        required id="question41">
                                    <label for="question41">1</label> <br>
                                    <input type="radio" name="question4" value="2"
                                        onclick="hideRadioAlert(this)" id="question42">
                                    <label for="question42">2</label><br>
                                    <input type="radio" name="question4" value="3"
                                        onclick="hideRadioAlert(this)" id="question43"> <label
                                        for="question43">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>5. Arus kas perusahaan kuat (3)/ lemah (1)?
                                    Keuangan aman dalam jangka lama (3) atau hanya
                                    mampu membiayai pengeluaran rutin harian &
                                    mingguan (1)?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question5" value="1"
                                        onclick="hideRadioAlert(this)" required id="question51">
                                    <label for="question51">1</label> <br>
                                    <input type="radio" name="question5" value="2"
                                        onclick="hideRadioAlert(this)" id="question52">
                                    <label for="question52">2</label><br>
                                    <input type="radio" name="question5" value="3"
                                        onclick="hideRadioAlert(this)" id="question53"> <label
                                        for="question53">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            {{-- Step 3 --}}
                            <div class="tab" style="display: none;">
                                <h5>6. Supplier/ pemasok bahan baku ikut sejahtera
                                    bersama bisnis kita.</h5>
                                <div class="form-group">
                                    <input type="radio" name="question6" value="1"
                                        onclick="hideRadioAlert(this)" required id="question61">
                                    <label for="question61">1</label> <br>
                                    <input type="radio" name="question6" value="2"
                                        onclick="hideRadioAlert(this)" id="question62">
                                    <label for="question62">2</label> <br>
                                    <input type="radio" name="question6" value="3"
                                        onclick="hideRadioAlert(this)" id="question63"> <label
                                        for="question63">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>7. Stok bahan baku secara kuantitas dan kualitas
                                    sampai masa depan sudah terjamin aman.</h5>
                                <div class="form-group">
                                    <input type="radio" name="question7" value="1"
                                        onclick="hideRadioAlert(this)" required id="question71">
                                    <label for="question71">1</label> <br>
                                    <input type="radio" name="question7" value="2"
                                        onclick="hideRadioAlert(this)" id="question72">
                                    <label for="question72">2</label><br>
                                    <input type="radio" name="question7" value="3"
                                        onclick="hideRadioAlert(this)" id="question73"> <label
                                        for="question73">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>8. Memiliki sistem order dan faktur yang jelas.</h5>
                                <div class="form-group">
                                    <input type="radio" name="question8" value="1"
                                        onclick="hideRadioAlert(this)" required id="question81">
                                    <label for="question81">1</label> <br>
                                    <input type="radio" name="question8" value="2"
                                        onclick="hideRadioAlert(this)" id="question82">
                                    <label for="question82">2</label><br>
                                    <input type="radio" name="question8" value="3"
                                        onclick="hideRadioAlert(this)" id="question83"> <label
                                        for="question83">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>9. Secara aktif dan dinamis mengukur kualitas
                                    produk? Evaluasi hanya saat terjadi komplain
                                    pelanggan?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question9" value="1"
                                        onclick="hideRadioAlert(this)" required id="question91">
                                    <label for="question91">1</label> <br>
                                    <input type="radio" name="question9" value="2"
                                        onclick="hideRadioAlert(this)" id="question92">
                                    <label for="question92">2</label><br>
                                    <input type="radio" name="question9" value="3"
                                        onclick="hideRadioAlert(this)" id="question93"> <label
                                        for="question93">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>10. Rutin melakukan pengukuran kepuasan
                                    pelanggan.</h5>
                                <div class="form-group">
                                    <input type="radio" name="question10" value="1"
                                        onclick="hideRadioAlert(this)" required id="question101"> <label
                                        for="question101">1</label> <br>
                                    <input type="radio" name="question10" value="2"
                                        onclick="hideRadioAlert(this)" id="question102">
                                    <label for="question102">2</label><br>
                                    <input type="radio" name="question10" value="3"
                                        onclick="hideRadioAlert(this)" id="question103"> <label
                                        for="question103">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div class="tab" style="display: none;">
                                <h5>11. Masih melakukan aktivitas bisnis sehari-hari?
                                    Seluruh tugas telah direncanakan, dijadwalkan,
                                    diprioritaskan?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question11" value="1"
                                        onclick="hideRadioAlert(this)" required id="question111">
                                    <label for="question111">1</label> <br>
                                    <input type="radio" name="question11" value="2"
                                        onclick="hideRadioAlert(this)" id="question112">
                                    <label for="question112">2</label> <br>
                                    <input type="radio" name="question11" value="3"
                                        onclick="hideRadioAlert(this)" id="question113"> <label
                                        for="question113">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>12. Menjalankan proses aktif dalam bisnis untuk
                                    mengidentifikasi dan mengatasi risiko-risiko utama
                                    – pembayaran, pasar,
                                    pelanggan, keselamatan – yang mungkin
                                    berdampak besar pada
                                    nasib bisnis ke depan?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question12" value="1"
                                        onclick="hideRadioAlert(this)" required id="question121">
                                    <label for="question121">1</label> <br>
                                    <input type="radio" name="question12" value="2"
                                        onclick="hideRadioAlert(this)" id="question122">
                                    <label for="question122">2</label><br>
                                    <input type="radio" name="question12" value="3"
                                        onclick="hideRadioAlert(this)" id="question123"> <label
                                        for="question123">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>13. Budaya masyarakat kondusif untuk hal yang positif,
                                    terbuka
                                    dan lingkungan tim interaktif yang mendukung
                                    produktifitas bisnis?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question13" value="1"
                                        onclick="hideRadioAlert(this)" required id="question131">
                                    <label for="question131">1</label> <br>
                                    <input type="radio" name="question13" value="2"
                                        onclick="hideRadioAlert(this)" id="question132">
                                    <label for="question132">2</label><br>
                                    <input type="radio" name="question13" value="3"
                                        onclick="hideRadioAlert(this)" id="question133"> <label
                                        for="question133">3</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>

                            </div>
                            <div class="tab" style="display: none;">
                                <h5>14.Gaji anda sebagai tim manajemen dan/ pemilik
                                    bisnis sudah cukup?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question14" value="1"
                                        onclick="hideRadioAlert(this)" required id="question141">
                                    <label for="question141">1</label> <br>
                                    <input type="radio" name="question14" value="2"
                                        onclick="hideRadioAlert(this)" id="question142">
                                    <label for="question142">2</label><br>
                                    <input type="radio" name="question14" value="3"
                                        onclick="hideRadioAlert(this)" id="question143"> <label
                                        for="question143">3</label>
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
