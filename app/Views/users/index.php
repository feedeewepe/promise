<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-user"></i> <?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    <?= $title; ?> Table
                </div>
                <div class="card-body">
                    <a href="<?= base_url('/users/addUser') ?>" class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus-square"></i> Add user</a>
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
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Usergroup</th>
                                    <th>Active</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($all_data as $datas) : ?>
                                    <tr>
                                        <td width="1%"><?= $no++; ?></td>
                                        <td><?= esc($datas->email); ?></td>
                                        <td><?= esc($datas->username); ?></td>                                        
                                        <td><?= esc($datas->GROUPNAME); ?></td>
                                        <td><?= esc(($datas->active==1?'Yes':'No')); ?></td>
                                        <td class="text-center" width="20%">
                                            <a href="" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#updateModal<?= $datas->id; ?>">
                                                Update
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#deleteModal<?= $datas->id; ?>">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    

    <!-- Update modal -->
    <?php foreach ($all_data as $datas) : ?>
        <div class="modal fade" id="updateModal<?= $datas->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> Update Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open('users/saveUser/' . $datas->id); ?>
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $datas->id; ?>">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="<?= $datas->email; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= $datas->username; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Isi jika Ganti Password Baru" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="pass_confirm">Ulangi Password</label>
                            <input type="password" name="pass_confirm" id="pass_confirm" class="form-control"  placeholder="Isi jika Ganti Password Baru" autocomplete="off">
                        </div>  
                        <div class="form-group">
                            <label for="usergroupid">User group</label>
                            <select name="usergroupid" class="form-control <?php if(session('errors.usergroupid')) : ?>is-invalid<?php endif ?>"  placeholder="User Group">
                                <?php if ($ugid = $datas->usergroupid ?? $datas->usergroupid) : ?>
                                <option value="">User Group</option>
                                <option value="2" <?= $ugid == '2' ? 'selected' : null ?>>Fakultas</option>
                                <option value="3" <?= $ugid == '3' ? 'selected' : null ?>>Bagian Pelayanan Akademik</option>
                                <option value="4" <?= $ugid == '4' ? 'selected' : null ?>>Pembimbing Akademik</option>
                                <option value="5" <?= $ugid == '5' ? 'selected' : null ?>>Pembimbing Lapangan</option>
                                <option value="6" <?= $ugid == '6' ? 'selected' : null ?>>Penguji</option>
                                <option value="7" <?= $ugid == '7' ? 'selected' : null ?>>Mahasiswa</option>
                            <?php endif; ?>
                            </select>   
                           
                        </div>
                        
                        <div class="form-group">
                            <label for="active">Active</label>                            
                            <select name="active" class="form-control <?php if(session('errors.active')) : ?>is-invalid<?php endif ?>"  placeholder="Active Status">
                                <?php $act = $datas->active;?>
                                <option value="1" <?= $act == '1' ? 'selected' : null ?>>Activate</option>
                                <option value="0" <?= ($act == '0' || $act == NULL) ? 'selected' : null ?>>Deactivate</option>
                            
                            </select> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Delete modal -->
    <?php foreach ($all_data as $datas) : ?>
        <div class="modal fade" id="deleteModal<?= $datas->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle"></i> Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open('users/deleteUser/' . $datas->id); ?>
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $datas->id; ?>">
                        <p>Click the submit button to delete data (<?= $datas->username; ?>)..!!!</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?= $this->endSection(); ?>