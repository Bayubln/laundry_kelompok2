<?php 
include_once '../template/header.php'; 
include_once '../template/sidebar.php'; 
include_once '../template/topbar.php'; 
?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
                <h3> Tambah Pengguna </small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5">
              </div>
            </div>

            <div class="clearfix"></div>

            <!-- start form  -->
            <div class="row">
						<div class="col-md-12 col-sm-12 ">
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="../../routers/r_pengguna.php?aksi=tambah" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="id" class="form-control" hidden>
											</div>
										</div>
										<div class="item form-group">
											<label for="nama" class="col-form-label col-md-3 col-sm-3 label-align">Nama Pengguna</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="nama" class="form-control" type="text" name="nama">
											</div>
										</div>
										<div class="item form-group">
											<label for="" class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="" class="form-control" type="text" name="username">
											</div>
										</div>
										<div class="item form-group">
											<label for="password" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="" class="form-control" type="password" name="password">
											</div>
										</div>
										<div class="item form-group">
											<label for="id_outlet" class="col-form-label col-md-3 col-sm-3 label-align">Id Outlet</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="" class="form-control" type="text" name="id_outlet">
											</div>
										</div>
										<div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control">
                        <?php foreach ($role as $key): ?>
                            <?php if ($key == $edit['role']): ?>
                            <option value="<?= $key ?>" selected><?= $key ?></option>    
                            <?php endif ?>
                            <option value="<?= $key ?>"><?= ucfirst($key) ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
										<div class="ln_solid"></div>
										<div class="item form-group">
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-12 col-sm-12 offset-md-20">
												<button class="btn btn-primary" type="submit" name="tambah">Simpan</button>
											</div>
										</div>


									</form>
								</div>
							</div>
						</div>
					</div>			
          </div>
        </div>

<?php include_once '../template/footer.php';?>