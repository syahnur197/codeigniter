  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Order Listing</li>
      </ol>
      <!-- Ordered Cart Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Orders</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Customer Name</th>
                  <th>Total Price</th>
                  <th>Checkout Time</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Checkout ID</th>
                  <th>Client</th>
                  <th>Total Price</th>
                  <th>Checkout Time</th>
                  <th>Options</th>
                </tr>
              </tfoot>
              <tbody>
                <?php $count = 1; foreach($orders as $order): ?>
                  <tr align="center">
                    <td><?= $count++;?></td>
                    <td align="left"><?= $order->first_name . " " . $order->last_name; ?></td>
                    <td>$ <?= $order->totalPrice; ?></td>
                    <td>datetime</td>
                    <td><a href="#">View Cart</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <script>
    $(document).ready(function() {
        $('table.display').DataTable();
    } );
    </script>
 