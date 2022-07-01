<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
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
          <h3 class="card-title">Data Pengguna</h3>

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
          <div class="row mb-2">
            <div class="col-sm">
              <table class="table table-striped">
                <tbody>
                  <tr><td>Username</td><td><?=$usr->username?></td></tr>
                  <tr><td>Password</td><td><?=$usr->password?></td></tr>
                  <tr><td>Email</td><td><?=$usr->email?></td></tr>
                  <tr><td>Created At</td><td><?=$usr->created_at?></td></tr>
                  <tr><td>Last Login</td><td><?=$usr->last_login?></td></tr>
                  <tr><td>Status</td><td><?=$usr->status?></td></tr>
                  <tr><td>Role</td><td><?=$usr->role?></td></tr>
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