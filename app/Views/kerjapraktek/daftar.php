<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h3 class="mt-4"><i class="icon-note"></i> <?= $title; ?></h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
            <div class="card mb-4">                
                <div class="card-body">                    
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <?php
                    $errors = session()->getFlashdata('failed');
                    if (!empty($errors)) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-times"></i> Failed</strong> data not added to database.
                            <ul>
                                <?php foreach ($errors as $e) { ?>
                                    <li><?= esc($e); ?></li>
                                <?php } ?>
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashData('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-check"></i> Success</strong> <?= session()->getFlashData('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="modal-body">
                    <form action="<?= base_url('KerjaPraktek/daftar') ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                        <div class="form-group">
                            <label>Ketua</label>
                            <input type="text" name="nimketua" id="nimketua" placeholder="NIM Mahasiswa" class="form-control">
                            <input type="text" name="namaketua" id="namaketua" placeholder="Nama Lengkap Mahasiswa" class="form-control">   
                            <input type="text" name="tlpketua" id="tlpketua" placeholder="No Telp Mahasiswa" class="form-control">
                            <input type="text" name="emailketua" id="emailketua" placeholder="Email Mahasiswa" class="form-control">
                        </div>  
                         </div>
                         <div class="col-xl-3 col-md-6">                      
                        <div class="form-group">
                            <label>Anggota 1 (Optional)</label>
                                <input type="text" name="nimanggota1" id="nimanggota1" placeholder="NIM Mahasiswa" class="form-control">
                                <input type="text" name="namaanggota1" id="namaanggota1" placeholder="Nama Lengkap Mahasiswa" class="form-control">
                                <input type="text" name="tlpanggota1" id="tlpanggota1" placeholder="No Telp Mahasiswa" class="form-control">
                                <input type="text" name="emailanggota1" id="emailanggota1" placeholder="Email Mahasiswa" class="form-control">
                        </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                        <div class="form-group">
                                <label>Anggota 2 (Optional)</label>
                                <input type="text" name="nimanggota2" id="nimanggota2" placeholder="NIM Mahasiswa" class="form-control">
                                <input type="text" name="namaanggota2" id="namaanggota2" placeholder="Nama Lengkap Mahasiswa" class="form-control">
                                <input type="text" name="tlpanggota2" id="tlpanggota2" placeholder="No Telp Mahasiswa" class="form-control">
                                <input type="text" name="emailanggota2" id="emailanggota2" placeholder="Email Mahasiswa" class="form-control">
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <select name="fakultas" id="fakultas" class="form-control">
                                <option value="">Pilih Fakultas</option>
                                <?php foreach ($fakultas as $f) { ?>
                                    <li><?php echo '<option value="'.$f->FACULTYID.'">'.$f->FACULTYNAME.'</option>'; ?></li>
                                <?php } ?>
                            </select>                                                
                        </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                        <div class="form-group">
                            <label for="prodi">Program Studi</label>
                            <select name="prodi" id="prodi" class="form-control">
                                <option value="">Pilih Fakultas Dahulu</option>
                            </select>                                                
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                            
                        <div class="form-group">
                            <label for="namainstansi">Instansi Tujuan</label>
                            <input type="text" name="namainstansi" class="form-control" autocomplete="off" placeholder="Nama instansi atau perusahaan tujuan">
                        </div>
                        </div>
                        <div class="col-xl-4 col-md-8">
                        <div class="form-group">
                            <label for="alamatinstansi">Alamat Instansi</label>
                            <input type="text" name="alamatinstansi" class="form-control" autocomplete="off" placeholder="Alamat instansi atau perusahaan tujuan">
                        </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                        <div class="form-group">
                            <label for="tlpinstansi">No Telepon Instansi</label>
                            <input type="text" name="tlpinstansi" class="form-control" autocomplete="off" placeholder="No Telp instansi">
                        </div>                                 
                                </div>
                                </div>       
                        <div class="modal-footer">
                            <span>Dengan mengisi form ini maka mahasiswa akan mendapatkan Surat pengantar survey. 
                                Surat pengantar survey adalah surat yang digunakan untuk mengajukan kepada pihak Instansi 
                                untuk dilakukan kegiatan penjajakan lokasi Kerja Praktik oleh Mahasiswa IT Telkom Surabaya. 
                                Surat pengantar survey tersebut harus diketahui dan atas izin Dekan Fakultas yang bersangkutan.</span>
                            <a href="<?= base_url('dashboard');?>" class="btn btn-secondary btn-sm" role="button">Close</a>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#fakultas').change(function(){ 
                var fakultasid=$(this).val();                
                $.ajax({
                    url : "<?php echo base_url('KerjaPraktek/prodiFakultas');?>",
                    method : "GET",
                    data : {fakultasid: fakultasid},
                    async : true,
                    dataType : 'json',
                    success: function(data){  
                        var html = '<option value="">Pilih Prodi</option>';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].STUDYPROGRAMID+'>'+data[i].STUDYPROGRAMNAME+'</option>';
                        }
                        $('#prodi').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>

    <?= $this->endSection(); ?>
    