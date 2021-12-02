<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
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
          <h3 class="card-title">Product</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#product_insert">
              Insert Account
            </button>
          </div>

              <div class="modal fade" id="product_insert">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Insert Account</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo base_url('product/insertproduct') ?>">
                              <input type="hidden" class="form-control" name="user_id" value="">
                              Product Name:<input type="text" class="form-control" name="product_name">
                              Product Price:<input type="text" class="form-control" name="product_price">
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" id="button1" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                      </form>
                      <!-- /.modal-content -->
                    </div>
            <!-- /.modal-dialog -->
                </div>
              <div class="modal fade" id="update_user">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Insert Account</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo base_url('residence/insertuser') ?>">
                              <input type="hidden" class="form-control" name="user_id" value="">
                              Name:<input type="text" class="form-control" name="uname">
                              Username:<input type="text" class="form-control" name="user_name">
                              Password<input type="password" class="form-control" name="password">
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                      </form>
                      <!-- /.modal-content -->
                    </div>
            <!-- /.modal-dialog -->
                </div>


        </div>
        <div class="card-body">
          <table class="table" id="product_table">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <!-- <th>Username</th>
                    <th>Password</th> -->
                    <th>Actions</th>
                </tr>
                <tbody>

                </tbody>
            </thead>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
