
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Manage Products</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                       <a href="<?php echo base_url('add-products') ?>" class="btn btn-primary float-end"><i class="fa fa-plus"></i> Add Products</a>
                       
                    </div>
                    <div class="card-body">

                        <table id="new_users" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Image</th>                                                                
                                <th>Categories name</th>
                                <th>Product name</th>
                                <th>Off Percentage</th>
                                <th>Price</th>
                                <th>Cancle Price</th>
                                <th>Add variant</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        
    </div> <!-- container-fluid -->
</div>


<div id="removeModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-scroll="true" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Remove Products</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form role="form" action="<?php echo base_url('admin/remove_products') ?>" method="post" id="removeForm">

            <div class="modal-body">                              
                 <p>Do you really want to remove?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- End Page-content -->
<script type="text/javascript">
    var manageTable;
    manageTable = $('#new_users').DataTable({  
        'ajax': '<?php echo base_url('admin/fetch_web_products');?>',
        'order': [],   
        "iDisplayLength": 100
    });
    function removeFunc(id)
    {
      if(id) {
        $("#removeForm").on('submit', function() {

          var form = $(this);

          // remove the text-danger
          $(".text-danger").remove();

          $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: { products_id:id }, 
            dataType: 'json',
            success:function(response) {

              manageTable.ajax.reload(null, false); 

              if(response.success === true) { 
                // hide the modal
                $("#removeModal").modal('hide');
                iziToast.success({
                    message: response.messages,
                }); 

              } else {
                iziToast.error({
                    message: response.messages,
                }); 
              }
            }
          }); 

          return false;
        });
      }
    }
    </script>