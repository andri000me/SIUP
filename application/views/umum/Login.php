<body class="bg-gradient-primary">

    <div class="container">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block image-half">akan diisi gambar</div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Login!</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?= base_url('Umum'); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" id="username" value="<?= set_value('username') ?>" placeholder="Username">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                                        <hr>
                                    </form>
                                    <!-- <div class="text-center">
                                        <a class="small" href="<?= base_url('Umum/lupapass'); ?>">Lupa Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('Umum/tdaftar'); ?>">Buat Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>