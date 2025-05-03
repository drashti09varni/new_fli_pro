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
                    <h4 class="mb-sm-0 font-size-18">Add Products</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">home</a></li>
                            <li class="breadcrumb-item active">Add Products</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                    <div class="card">
                        <form role="form" action="<?php echo base_url('admin/insert_products') ?>" method="post" enctype="multipart/form-data">     <input type="hidden" name="id" id="id" value="<?php echo @$products['id']; ?>">                       
                            <div class="card-body">                        
                                <div class="row">    
                                    
                                    <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="site_logo">Image</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <?php           
                                                    $image_url = (@$products['image']) ? base_url(@$products['image']) : "";          
                                                ?>
                                                <input id="image" name="image" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $image_url; ?>" >
                                                <input id="old_img" name="old_img" type="hidden" class="form-control" value="<?php echo @$products['image']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <?php           
                                                    $image_url2 = (@$products['image2']) ? base_url(@$products['image2']) : "";          
                                                ?>
                                                <input id="image2" name="image2" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $image_url2; ?>" >
                                                <input id="old_img2" name="old_img2" type="hidden" class="form-control" value="<?php echo @$products['image2']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <?php           
                                                    $image_url3 = (@$products['image3']) ? base_url(@$products['image3']) : "";          
                                                ?>
                                                <input id="image3" name="image3" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $image_url3; ?>" >
                                                <input id="old_img3" name="old_img3" type="hidden" class="form-control" value="<?php echo @$products['image3']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <?php           
                                                    $image_url4 = (@$products['image4']) ? base_url(@$products['image4']) : "";          
                                                ?>
                                                <input id="image4" name="image4" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $image_url4; ?>" >
                                                <input id="old_img4" name="old_img4" type="hidden" class="form-control" value="<?php echo @$products['image4']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <?php           
                                                    $image_url5 = (@$products['image5']) ? base_url(@$products['image5']) : "";          
                                                ?>
                                                <input id="image5" name="image5" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $image_url5; ?>" >
                                                <input id="old_img5" name="old_img5" type="hidden" class="form-control" value="<?php echo @$products['image5']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <?php           
                                                    $image_url6 = (@$products['image6']) ? base_url(@$products['image6']) : "";          
                                                ?>
                                                <input id="image6" name="image6" type="file" class="form-control dropify" data-show-upload="false" data-allowed-file-extensions="png jpg jpeg" data-show-caption="true" data-max-file-size="1m" data-default-file="<?php echo  $image_url6; ?>" >
                                                <input id="old_img6" name="old_img6" type="hidden" class="form-control" value="<?php echo @$products['image6']; ?>">
                                            </div>
                                        </div>
                                    </div>    
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="mb-3 select_main_url">
                                            <label class="control-label">Select Categories</label>
                                            <select class="form-control" id="categories_id" name="categories_id" required="required">
                                                <option>Select</option>
                                                <?php foreach ($categories as $key => $value): ?>
                                                    <option value="<?= $value['id'];?>" <?php echo ($value['id'] == @$products['categories_id']) ? 'selected' : ''; ?>><?= $value['name'];?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>                                       
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Product name</label>
                                            <input class="form-control" type="text" value="<?php echo @$products['product_name']; ?>" id="product_name" name="product_name" required placeholder="Enter Product Name">
                                        </div>   
                                         <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Price</label>
                                            <input class="form-control" type="text" value="<?php echo @$products['price']; ?>" id="price" name="price" required placeholder="Enter Price">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Cancel Price</label>
                                            <input class="form-control" type="text" value="<?php echo @$products['cancle_price']; ?>" id="cancle_price" name="cancle_price" required placeholder="Enter cancle Price">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Off Percentage</label>
                                            <input class="form-control" type="text" value="<?php echo @$products['off_per']; ?>" id="off_per" name="off_per" required placeholder="Enter Off Percentage" required>
                                        </div>
                                       
                                        
                                    </div> 
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3"><?php echo @$products['description']; ?>
                                            </textarea>
                                        </div>
                                    </div> 
                                    
                                </div> 
                            </div>
                            <div class="d-flex flex-wrap gap-2 justify-content-center mb-4 p-3 ">
                                <button type="submit" class="btn btn-primary waves-effect waves-light btn-lg">Save Changes</button>
                            </div>
                        </form> 
                    </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script type="text/javascript"> 
    CKEDITOR.replace( 'description' );
     $('.dropify').dropify();
     $(".dropify-clear").click(function(){
         var did = $(this).parent().parent().attr('id');        
         $("#hdn_product_all"+did).val('');
     });

    $(document).ready(function() {      
        <?php if(@$products['id']) { ?>
          get_data_edit();
        <?php } ?>
        $("#categories_id").on("change",function()
        {
           get_data_edit();         
           $('#application_id').empty();       
        });

        function get_data_edit(){
         var categories_id = $('#categories_id').val();                
          $.ajax({
               url : "<?php echo base_url('admin/get_applications') ?>",
               type: "post",
               data: {"categories_id":categories_id},
              dataType: 'json',
               success : function(response)
               {  
                <?php if(@$products['id']) { ?> 
                    var subcategory_id = "<?php echo $products['application_id'];?>";
                    $.each(response,function(index,data){
                      if(subcategory_id == data.id){                    
                          $('#application_id').append('<option value="'+ data.id +'" selected>'+ data.name +'</option>');
                      } else {
                          $('#application_id').append('<option value="'+ data.id +'">'+ data.name +'</option>');
                      }
                    });
                                     
                <?php } else { ?>                   
                    $.each(response,function(index,data){                       
                         $('#application_id').append('<option value="'+data['id']+'">'+data['name']+'</option>');
                     }); 
                <?php } ?>
               }
          });  
        }         
    });
</script>