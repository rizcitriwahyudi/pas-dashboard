<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section><!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <?php
                if ($this->session->flashdata('success')){
                    echo '<div class="alert alert-success"><i class="fa fa-check"></i>';
                    echo $this->session->flashdata('success');
                    echo '</div>';
                }

            ?>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User DataTables</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p><a href="<?php echo base_url('admin/user/adduser') ?>" class="btn btn-success"><i class="fa fa-plus"></i> AddUser</a></p>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Level Access</th>
                    <th>Created At</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i =1; foreach($user as $row) { ?>
                    <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row->first_name ?></td>
                    <td><?php echo $row->last_name ?></td>
                    <td><?php echo $row->username ?></td>
                    <td><?php echo $row->email ?></td>
                    <td><?php echo $row->level_access ?></td>
                    <td><?php echo $row->created_at ?></td>
                    <td> <a href="<?php echo base_url('admin/user/delete/'.$row->user_id) ?>" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i>Delete</a></td>
                    </tr>
                    <?php $i++; } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>