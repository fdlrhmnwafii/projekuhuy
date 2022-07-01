<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Data Pengguna</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Data Pengguna</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Username</th>
                            <th>Password (Encrypted)</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_users as $obj) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $obj->username ?></td>
                                <td><?= $obj->password ?></td>
                                <td><?= $obj->email ?></td>
                                <td><?= $obj->status ?></td>
                                <td><?= $obj->role ?></td>
                                <td><a class ='btn btn-primary' href="datapengguna/view?id=<?=$obj->id?>">view</a></td>
                                <td><a class ='btn btn-danger' href="datapengguna/delete?id=<?=$obj->id?> "onclick="if(!confirm('Anda Yakin Hapus Username <?=$obj->username?>')){return false}">Delete</a></td>
                                

                            </tr>
                        <?php
                            $nomor++;
                        }
                        ?>


                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>