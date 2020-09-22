<main>
  <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
      <div class="page-header-content pt-4">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto mt-4">
            <h1 class="page-header-title">
              <div class="page-header-icon"><i data-feather="slack"></i></div>
              BackEnd
            </h1>
            <div class="page-header-subtitle">Halaman BackEnd FirstCode</div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main page content-->
  <div class="container mt-n10">
    <div class="row">
      <div class="col-xxl-4 col-xl-6 mb-4">
        <div class="card card-header-actions h-100">
          <div class="card-header">
            Aplikasi Pulsa
          </div>
          <div class="card-body">
            <form action="" method="POST" id="formPulsa">
              <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input class="form-control form-control-solid text-monospace" id="telepon" name="telepon" type="tel" placeholder="08xxxxxxxxxx">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Provider</label><select class="form-control form-control-solid custom-select text-monospace" name="provider" id="exampleFormControlSelect1">
                  <option class="text-monospace" disabled selected>Pilih...</option>
                  <option class="text-monospace" value="Indosat">Indosat</option>
                  <option class="text-monospace" value="simPATI">simPATI</option>
                  <option class="text-monospace" value="AXIS">AXIS</option>
                  <option class="text-monospace" value="Tri">Tri</option>
                </select>
              </div>
              <div class="form-group">
                <label for="phone">Nominal Pulsa</label>
                <div>
                  <div class="custom-control custom-radio custom-control-solid custom-control-inline">
                    <input class="custom-control-input" id="radioSolid1" type="radio" name="nominal" value="5000" checked>
                    <label class="custom-control-label text-monospace" for="radioSolid1">5.000</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-solid custom-control-inline">
                    <input class="custom-control-input" id="radioSolid2" type="radio" name="nominal" value="10000">
                    <label class="custom-control-label text-monospace" for="radioSolid2">10.000</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-solid custom-control-inline">
                    <input class="custom-control-input" id="radioSolid3" type="radio" name="nominal" value="25000">
                    <label class="custom-control-label text-monospace" for="radioSolid3">25.000</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-solid custom-control-inline">
                    <input class="custom-control-input" id="radioSolid4" type="radio" name="nominal" value="50000">
                    <label class="custom-control-label text-monospace" for="radioSolid4">50.000</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-solid custom-control-inline">
                    <input class="custom-control-input" id="radioSolid5" type="radio" name="nominal" value="100000">
                    <label class="custom-control-label text-monospace" for="radioSolid5">100.000</label>
                  </div>
                </div>
              </div>
              <div class="text-right">
                <button class="btn btn-primary" type="submit">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-6 mb-4">
        <div class="card card-header-actions h-100">
          <div class="card-header">
            Struk Pembelian Pulsa
          </div>
          <div class="card-body">
            <div class="list-group list-group-flush">
              <div class="d-flex align-items-center justify-content-between small">
                <div class="mr-3 h4 font-weight-light text-monospace">
                  Nomor Telepon
                </div>
                <div class="font-weight-500 text-dark h4 text-monospace">
                  <?php if (isset($telepon)) : ?>
                    <?= $telepon; ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between small mt-4">
                <div class="mr-3 h4 font-weight-light text-monospace">
                  Nama Provider
                </div>
                <div class="font-weight-500 text-dark h4 text-monospace">
                  <?php if (isset($provider)) : ?>
                    <?= $provider; ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between small mt-4">
                <div class="mr-3 h4 font-weight-light text-monospace">
                  Nominal Pulsa
                </div>
                <div class="font-weight-500 text-dark h4 text-monospace">
                  <?php if (isset($nominal)) : ?>
                    <?= number_format($nominal, 0, ',', '.'); ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>
                </div>
              </div>
              <hr>
              <hr>
              <hr>
              <div class="border-top text-black"></div>
              <hr>
              <div class="d-flex align-items-center justify-content-between small">
                <div class="mr-3 h4 text-black roboto">
                  Harga Total
                </div>
                <div class="font-weight-500 text-dark h4 roboto">
                  <?php if (isset($nominal)) : ?>
                    <?php if ($nominal == 5000 || $nominal == 10000) : ?>
                      Rp<?= number_format(($nominal + ($nominal * (10 / 100))), 0, ',', '.'); ?>
                    <?php elseif ($nominal == 25000 || $nominal == 50000 || $nominal == 100000) : ?>
                      Rp<?= number_format(($nominal + ($nominal * (5 / 100))), 0, ',', '.'); ?>
                    <?php endif; ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>