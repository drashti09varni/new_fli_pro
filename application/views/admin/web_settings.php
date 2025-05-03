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
                        <form role="form" action="<?php echo base_url('admin/insert_web_setting_segement_count') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <?php           
                                            $slider1 = (@$web_settings['slider1']) ? base_url(@$web_settings['slider1']) : "";          
                                        ?>
                                        <label for="site_logo">Slider Image</label>
                                        <input id="slider1" name="slider1" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $slider1; ?>" >
                                        <input id="old_slider1" name="old_slider1" type="hidden" class="form-control" value="<?php echo @$web_settings['slider1']; ?>">
                                    </div>                                                                   
                                </div>  
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <?php           
                                            $slider2 = (@$web_settings['slider2']) ? base_url(@$web_settings['slider2']) : "";          
                                        ?>
                                        <label for="site_logo">Slider Image</label>
                                        <input id="slider2" name="slider2" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $slider2; ?>" >
                                        <input id="old_slider2" name="old_slider2" type="hidden" class="form-control" value="<?php echo @$web_settings['slider2']; ?>">
                                    </div>                                                                   
                                </div>  
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <?php           
                                            $slider3 = (@$web_settings['slider3']) ? base_url(@$web_settings['slider3']) : "";          
                                        ?>
                                        <label for="site_logo">Slider Image</label>
                                        <input id="slider3" name="slider3" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $slider3; ?>" >
                                        <input id="old_slider3" name="old_slider3" type="hidden" class="form-control" value="<?php echo @$web_settings['slider3']; ?>">
                                    </div>                                                                  
                                </div>    
                                <div class="col-sm-6">    
                                <div class="mb-3">
                                <?php           
                                            $logo = (@$web_settings['logo']) ? base_url(@$web_settings['logo']) : "";          
                                        ?>
                                        <label for="site_name">Site Logo</label>
                                        <input id="logo" name="logo" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $logo; ?>" >
                                        <input id="logo" name="logo" type="hidden" class="form-control" value="<?php echo @$web_settings['logo']; ?>">
                                    </div>                                
                                    <div class="mb-3">
                                        <label for="site_name">Site name</label>
                                        <input id="site_name" name="site_name" type="text" class="form-control" value="<?php echo $web_settings['site_name'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="upi_id">UPI ID</label>
                                        <input id="upi_id" name="upi_id" type="text" class="form-control" value="<?php echo $web_settings['upi_id'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="upi_id">Google & Facebook Pixel Code</label>
                                        <textarea id="pixel_code" name="pixel_code" class="form-control" style="height: 150px;"><?php echo $web_settings['pixel_code'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="meta_title">Meta title</label>
                                        <input id="meta_title" name="meta_title" type="text" class="form-control" value="<?php echo $web_settings['meta_title'] ?>">
                                    </div> 
                                    <div class="mb-3">
                                        <label for="meta_keyword">Meta keyword</label>
                                        <input id="meta_keyword" name="meta_keyword" type="text" class="form-control" value="<?php echo $web_settings['meta_keyword'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="meta_description">Meta description</label>
                                        <input id="meta_description" name="meta_description" type="text" class="form-control" value="<?php echo $web_settings['meta_description'] ?>">
                                    </div>  


                                    <div class="mb-3">
                                        <label for="meta_description">Contact No.</label>
                                        <input id="contact_no" name="contact_no" type="text" class="form-control" value="<?php echo $web_settings['contact_no'] ?>">
                                    </div>  
                                    <div class="mb-3">
                                        <label for="meta_description">email</label>
                                        <input id="email" name="email" type="text" class="form-control" value="<?php echo $web_settings['email'] ?>">
                                    </div>  
                                    <div class="mb-3">
                                        <label for="meta_description">address</label>
                                        <textarea id="address" name="address" class="form-control"><?php echo $web_settings['address'] ?></textarea>
                                    </div>  
                                    
                                    <div class="mb-3">
                                        <label for="meta_description">Domain URL</label>
                                        <input id="site_link" name="site_link" type="text" class="form-control" value="<?php echo $web_settings['site_link'] ?>">
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