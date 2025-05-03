<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<style type="text/css">
    .dropify-wrapper .dropify-message span.file-icon {
        font-size: 26px;
        color: #CCC;
    }
</style>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Settings</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin');?>">Home</a></li>
                            <li class="breadcrumb-item active">Setting</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12"> 

                <div class="card">
                    <!--<div class="card-header">-->
                    <!--    <h4 class="card-title">Settings </h4>-->
                    <!--</div>-->
                    <div class="card-body">
                        <form role="form" action="<?php echo base_url('admin/change_password') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                   
                                    
                                    <div class="mb-3">
                                        <label for="meta_description">Enter New Password</label>
                                        <input id="password" name="password" type="text" class="form-control" value="<?php echo $password['password'] ?>">
                                    </div>  

                                </div>                              
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->        
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<script type="text/javascript">
     $('.dropify').dropify();
     $(".dropify-clear").click(function(){
         var did = $(this).parent().parent().attr('id');        
         $("#hdn_product_all"+did).val('');
     });
</script>