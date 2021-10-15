<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
<div class="grey-bg container-fluid">

    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase"><?= $title?></h4>
        <p>Kerja Praktek dan Magang</p>
      </div>
    </div>
    <div class="row">

    <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="<?= base_url('kerjapraktek/daftarKP');?>">
        <div class="card">
          <div class="card-content">
            <div class="card-header btn-primary">
            <h4 class="float-left">1</h4>
            <h4>Pendaftaran KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-note primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <span>Status</span>
                  <div class="danger">Belum Daftar</div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
      </div>

    <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
            <div class="card-header btn-warning">
            <h4 class="float-left">2</h4>
            <h4>Survey KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-chart warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <span>Status</span>
                  <div class="danger">Belum Survey</div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
            <div class="card-header btn-success">
            <h4 class="float-left">3</h4>
                <h4>Proposal KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-book-open success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <span>Status</span>
                  <div class="danger">Belum Membuat</div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>       
      </div>

      <div class="col-xl-3 col-sm-6 col-12"> 
      <a class="btn" href="#">
            <div class="card">            
                <div class="card-content">                    
                    <div class="card-header btn-primary">
                    <h4 class="float-left">4</h4>
                    <h4>Permohonan KP</h4>
                    </div>                    
                    <div class="card-body">
                    <div class="media d-flex">
                        <div class="align-self-center">
                        <i class="icon-notebook primary font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                        <span>Status</span>
                        <div class="danger">Belum Mengajukan</div>
                        </div>
                    </div>
                </div>
               
            </div>
        </a>
        </div>
      </div>
      

      

      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
            <div class="card-header btn-info">
            <h4 class="float-left">5</h4>
                <h4>Surat Balasan KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-envelope info font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <span>Status</span>
                  <div class="danger">Belum Dilaporkan</div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>       
      </div>

      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-danger">
          <h4 class="float-left">6</h4>
                <h4>Jadwal KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-calendar danger font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <span>Status</span>
                  <div class="danger">Belum Terjadwal</div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        
      </div>

      

      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-danger">
          <h4 class="float-left">7</h4>
                <h4>Pakta Integritas KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
              <div class="align-self-center">
                  <i class="icon-badge danger font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <span>Status</span>
                  <div class="danger">Belum Diunggah</div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        
      </div>
  
      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-warning">
          <h4 class="float-left">8</h4>
                <h4>Pelaksanaan KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
              <div class="align-self-center">
                  <i class="icon-rocket warning font-large-2 float-right"></i>
                </div>
                <div class="media-body text-right">
                <span>Status</span>
                  <div class="danger">Belum Dilaksanakan</div>
                </div>
                
              </div>
            </div>
          </div>
          </a>
        </div>
       
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-primary">
          <h4 class="float-left">9</h4>
                <h4>Laporan KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
              <div class="align-self-center">
                  <i class="icon-doc primary font-large-2 float-right"></i>
                </div>
                <div class="media-body text-right">
                  <span>Status</span>
                  <div class="danger">Belum Dilaporkan</div>
                </div>
                
              </div>
            </div>
          </div>
          </a>
        </div>        
      </div>

      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-danger">
          <h4 class="float-left">10</h4>
                <h4>Jadwal UPKP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
              <div class="align-self-center">
                  <i class="icon-event danger font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <span>Status</span>
                  <div class="danger">Belum Terjadwal</div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>        
      </div>

    </div>
  
    
  </section>
  
  
  </div>
</main>

    <?= $this->endSection(); ?>