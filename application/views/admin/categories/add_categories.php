<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Categories</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">home</a></li>
                            <li class="breadcrumb-item active">Add Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">                        
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('admin/insert_categories') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" id="id" name="id" value="<?php echo @$categories['id']; ?>">    
                                    <div>
                                        <div class="mb-3">
                                            <?php           
                                                $image_url = (@$categories['image']) ? base_url(@$categories['image']) : "";          
                                            ?>
                                            <label for="site_logo">Image</label>
                                            <input id="image" name="image" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $image_url; ?>" >
                                            <input id="old_img" name="old_img" type="hidden" class="form-control" value="<?php echo @$categories['image']; ?>">
                                        </div> 
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Name</label>
                                            <input class="form-control" type="text" value="<?php echo @$categories['name']; ?>" id="name" name="name" required>
                                        </div> 
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                               </form>
                            </div>                                                                          
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<script type="text/javascript">
    $('.dropify').dropify();
</script>