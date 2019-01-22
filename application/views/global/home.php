  <div class="py-5 text-center" style="background-image: url('<?php echo base_url(); ?>assets/frontend/assets/sistempakar/medzone-pro-header.jpg'); background-repeat: no-repeat;background-position:center top;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 ">
          <h1 class="display-3 mb-4 text-primary">SISTEM PAKAR&nbsp;</h1>
          <p class="lead mb-5">Sistem Pakar Deteksi Tingkat Risiko Penyakit Jantung Dengan Metode Inferensi Fuzzy (Sugeno)</p>
          <a href="<?php echo base_url(); ?>global/login" class="btn btn-lg mx-1 btn-secondary">Login</a>
          <a href="<?php echo base_url(); ?>Home/try_pemeriksaan" class="btn btn-lg btn-primary mx-1">Coba Sekarang!</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7">
          <h2 class="text-primary">Apa itu Penyakit Jantung?</h2>
          <p class="lead">Penyakit jantung adalah kondisi yang memengaruhi fungsi jantung. Jantung adalah organ muskular kompleks yang memompa darah keseluruh tubuh dalam ritme yang tetap. Penyakit jantung, juga diketahui sebagai penyakit kardiovaskular, merupakan salah
            satu penyebab utama, kematian di seluruh dunia. Mengenali tanda dan gejala penyakit jantung dapat membantu mencegah kondisi Anda menjadi lebih buruk, sehingga Anda dapat menghindari gagal jantung yang biasanya menyebabkan kematian.</p>
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="<?php echo base_url(); ?>assets/frontend/assets/sistempakar/jantung.jpg"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="<?php echo base_url(); ?>assets/frontend/assets/sistempakar/medzone-steth.jpg"> </div>
        <div class="col-md-7">
          <h2 class="text-primary pt-3">Kenapa perlu dilakukan deteksi penyakit jantung?</h2>
          <p class="lead">Menurut WHO Penyakit Jantung merupakan Pembunuh No.1 di Dunia. Dengan melakukan deteksi penyakit lebih awal diharapkan dapat segera melakukan konsultasi lebih lanjut untuk mendapatkan perawatan dan tindakan yang diperlukan.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white bg-secondary">
    <div class="container">
      <div class="row">
        <div class="align-self-center p-5 col-md-6">
          <h1 class="mb-3">Sistem Pakar</h1>
          <p class="mb-5 lead">Sistem pakar adalah salah satu cabang dari Artificial Intelligence (AI) yang membuat penggunaan secara luas knowledge yang khusus untuk penyelesaian masalah tingkat manusia yang pakar. Seorang pakar adalah orang yang mempunyai keahlian dalam
            bidang tertentu, yaitu pakar yang mempunyai knowledge atau kemampuan khusus yang orang lain tidak mengetahui atau mampu dalam bidang yang dimilikinya. </p>
        </div>
        <div class="col-md-6">
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2NLSiNnbIOw?autoplay=0" allowfullscreen=""> </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="mb-4 text-primary">Variabel Deteksi Penyakit Jantung</h1>
          <p class="lead">Sistem Pakar Deteksi Penyakit Jantung dengan Metode Inferensi Fuzzy (Sugeno) ini di desain agar dapat digunakan untuk membantu melakukan deteksi secara cepat, sehingga apabila beresiko penyakit jantung dapat segera di konsultasikan atau di tangani
            lebih lanjut. Berikut ini variabel - variabel yang harus diinputkan ke sistem agar dapat didapatkan hasil deteksi.</p>
          <div class="row text-left mt-5">
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-heartbeat"></i></div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary"><b>Tekanan Darah</b></h5>
                </div>
              </div>
              <p>Tekanan darah adalah tekanan yang dihasilkan oleh pompa jantung untuk menggerakkan darah keseluruh tubuh. Darah membawa nutrisi dan oksigen ke seluruh bagian tubuh. <br /> Tekanan darah tinggi, atau hipertensi, mengacu pada kondisi dimana darah dipompa keseluruh tubuh pada tekanan tinggi.</p>
            </div>
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-flask"></i></div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary"><b>Gula Darah / Diabetes</b></h5>
                </div>
              </div>
              <p>Diabetes Melitus (DM) atau kencing manis adalah suatu penyekit dimana kadar gula dalam darah tinggi karena tubuh tidak dapat menghasilkan atau menggunakan insulin secara cukup</p>
            </div>
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-fire"></i></div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary"><b>Kebiasaan Merokok (Smoker)</b></h5>
                </div>
              </div>
              <p>Rokok memiliki zat berbahaya yang mengakibatkan penyumbatan pembuluh arteri yang merupakan saluran makanan bagi jantung.</p>
            </div>
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-balance-scale"></i></div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary"><b>Tinggi dan Berat Badan</b></h5>
                </div>
              </div>
              <p>Tinggi dan berat badan digunakan dalam perhitungan BMI (Body Mass Index)</p>
            </div>
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-user-md"></i></div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary"><b>Treatment Hipertensi</b></h5>
                </div>
              </div>
              <p>Jika memiliki tekanan darah tinggi, apakah telah dilakukan treatment hipertensi sebelumnya?. Seperti pengobatan obat anti hipertensi.&nbsp;</p>
            </div>
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-mars-stroke"></i></div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary"><b>Usia dan Gender</b></h5>
                </div>
              </div>
              <p>Usia dan Gender mempengaruhi tingkat risiko penyakit jantung. Pada penyakit jantung koroner laki-laki lebih rentan terkena PJK daripada wanita.Dan usia lanjut juga lebih rentan terkena PJK</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contributors</h1>
          <p class="lead">Pihak - pihak yang membantu dalam pembangunan sistem ini</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 p-4">
          <img class="img-fluid d-block mx-auto rounded" src="<?php echo base_url(); ?>assets/frontend/assets/sistempakar/7737608_20150308025015.jpg">
          <p class="my-4"><i>Narasumber dan Pengambilan Data</i></p>
          <p>RSUP Dr. Sardjito</p>
        </div>
        <div class="col-md-6 p-4">
          <img class="img-fluid d-block mx-auto rounded" src="<?php echo base_url(); ?>assets/frontend/assets/sistempakar/logo-mercu-300x222.jpg">
          <p class="my-4"><i>Universitas</i></p>
          <p>Universitas Mercu Buana Yogyakarta</p>
        </div>
      </div>
    </div>
  </div>
