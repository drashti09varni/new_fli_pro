<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Variant</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Home</a></li>
                            <li class="breadcrumb-item active">Add Variant</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12"> 
                    
                <div class="card">
                    <form role="form" action="<?php echo base_url('admin/insert_innovative_images') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="remove_innn" id="remove_innn" value="">
                        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id;?>">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4 class="card-title">Color Variant</h4>
                            </div>
                            <div>
                                <button type="button" class="btn btn-success" id="adddata">+ Add New Row</button>
                            </div>
                        </div>
                        <div class="card-body" id="note_box_div">
                            <?php if($innovative_other) { ?>
                                <?php foreach ($innovative_other as $k => $v): ?>  

                                    <div class="row remove_txt_<?php echo $k + 1;?>">  
                                        <input type="hidden" class="form-control" name="edit_innovative_other[]" value="<?php echo $v['id'];?>" /> 
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="site_name">Image</label>
                                                <input id="image_<?php echo $k + 1;?>" name="edit_image[]" type="file" class="form-control" value="">
                                                <input id="dy_ii_<?php echo $k + 1;?>" name="edit_old_image[]" type="hidden" class="form-control" value="<?php echo $v['image'];?>">
                                                 <img src="<?php echo base_url().$v['image'] ?>" style="width:125px;height:100px;"><br>
                                            </div>
                                        </div> 
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="dy_title">Title</label>
                                                <input id="dy_title_<?php echo $k + 1;?>" name="edit_dy_title[]" type="text" class="form-control dy_title" value="<?php echo $v['title'];?>">
                                            </div>
                                        </div>                                            
                                        <div class="col-sm-2">
                                            <div class="mb-3">  
                                                <button type="button" style="width:100px;border-radius: 4px;margin-top: 28px;padding: 8px;" class="btn btn-danger btn-sm" onclick="remove_file(<?php echo $k + 1;?>,<?php echo $v['id'];?>);"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>                                  
                                    </div> 
                                <?php endforeach ?>
                            <?php } else { ?>
                                <div class="row remove_txt_1">  
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="site_name">Image</label>
                                            <input id="image_1" name="image[]" type="file" class="form-control" value="">
                                        </div>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="dy_title">Title</label>
                                            <input id="dy_title_1" name="dy_title[]" type="text" class="form-control dy_title" value="">
                                        </div>
                                    </div>                                         
                                    <div class="col-sm-2">
                                        <div class="mb-3">  
                                            <button type="button" style="width:100px;border-radius: 4px;margin-top: 28px;padding: 8px;" class="btn btn-danger btn-sm" onclick="remove_file(1);"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>                                  
                                </div> 
                            <?php } ?>
                        </div>
                        <div class="d-flex flex-wrap gap-2 justify-content-center mb-4 p-3 ">
                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-lg">Save Changes</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="card col-md-6">
                        <form role="form" action="<?php echo base_url('admin/insert_size') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="remove_size" id="remove_size" value="">
                            <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id;?>">
                            <div class="card-header d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title">Size Variant</h4>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success" id="add_size">+ Add New Row</button>
                                </div>
                            </div>
                            <div class="card-body" id="size_box_div">
                                <?php if($size) { ?>
                                    <?php foreach ($size as $k => $v): ?>  

                                        <div class="row remove_size_<?php echo $k + 1;?>">  
                                            <input type="hidden" class="form-control" name="edit_size_other[]" value="<?php echo $v['id'];?>" />
                                            <div class="col-sm-10">
                                                <div class="mb-3">
                                                    <label for="size_title">Title</label>
                                                    <input id="size_title_<?php echo $k + 1;?>" name="edit_size_title[]" type="text" class="form-control size_title" value="<?php echo $v['title'];?>">
                                                </div>
                                            </div>                                            
                                            <div class="col-sm-2">
                                                <div class="mb-3">  
                                                    <button type="button" style="width:100px;border-radius: 4px;margin-top: 28px;padding: 8px;" class="btn btn-danger btn-sm" onclick="remove_sizes(<?php echo $k + 1;?>,<?php echo $v['id'];?>);"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>                                  
                                        </div> 
                                    <?php endforeach ?>
                                <?php } else { ?>
                                    <div class="row remove_size_1">                                      
                                        <div class="col-sm-10">
                                            <div class="mb-3">
                                                <label for="size_title">Title</label>
                                                <input id="size_title_1" name="size_title[]" type="text" class="form-control size_title" value="">
                                            </div>
                                        </div>                                         
                                        <div class="col-sm-2">
                                            <div class="mb-3">  
                                                <button type="button" style="width:100px;border-radius: 4px;margin-top: 28px;padding: 8px;" class="btn btn-danger btn-sm" onclick="remove_sizes(1);"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>                                  
                                    </div> 
                                <?php } ?>
                            </div>
                            <div class="d-flex flex-wrap gap-2 justify-content-center mb-4 p-3 ">
                                <button type="submit" class="btn btn-primary waves-effect waves-light btn-lg">Save Changes</button>
                            </div>
                        </form>
                    </div>   
                    <div class="card col-md-6">
                        <form role="form" action="<?php echo base_url('admin/insert_storage') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="remove_storage" id="remove_storage" value="">
                            <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id;?>">
                            <div class="card-header d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title">Storage Variant</h4>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success" id="add_storage">+ Add New Row</button>
                                </div>
                            </div>
                            <div class="card-body" id="storage_box_div">
                                <?php if($storage) { ?>
                                    <?php foreach ($storage as $k => $v): ?>  

                                        <div class="row remove_storage_<?php echo $k + 1;?>">  
                                            <input type="hidden" class="form-control" name="edit_storage_other[]" value="<?php echo $v['id'];?>" />
                                            <div class="col-sm-10">
                                                <div class="mb-3">
                                                    <label for="storage_title">Title</label>
                                                    <input id="storage_title_<?php echo $k + 1;?>" name="edit_storage_title[]" type="text" class="form-control storage_title" value="<?php echo $v['title'];?>">
                                                </div>
                                            </div>                                            
                                            <div class="col-sm-2">
                                                <div class="mb-3">  
                                                    <button type="button" style="width:100px;border-radius: 4px;margin-top: 28px;padding: 8px;" class="btn btn-danger btn-sm" onclick="remove_storages(<?php echo $k + 1;?>,<?php echo $v['id'];?>);"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>                                  
                                        </div> 
                                    <?php endforeach ?>
                                <?php } else { ?>
                                    <div class="row remove_storage_1">                                      
                                        <div class="col-sm-10">
                                            <div class="mb-3">
                                                <label for="storage_title">Title</label>
                                                <input id="storage_title_1" name="storage_title[]" type="text" class="form-control storage_title" value="">
                                            </div>
                                        </div>                                         
                                        <div class="col-sm-2">
                                            <div class="mb-3">  
                                                <button type="button" style="width:100px;border-radius: 4px;margin-top: 28px;padding: 8px;" class="btn btn-danger btn-sm" onclick="remove_storages(1);"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>                                  
                                    </div> 
                                <?php } ?>
                            </div>
                            <div class="d-flex flex-wrap gap-2 justify-content-center mb-4 p-3 ">
                                <button type="submit" class="btn btn-primary waves-effect waves-light btn-lg">Save Changes</button>
                            </div>
                        </form>
                    </div>  
                </div>    
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script type="text/javascript">   

    $("#adddata").click(function(){ 
      var dy_title_length = $(".dy_title").length; 
      var dy_title_row_id = dy_title_length + 1;  
        var html = '<div class="row remove_txt_'+dy_title_row_id+'"><div class="col-sm-4"><div class="mb-3"><label for="site_name">Image</label><input id="image_'+dy_title_row_id+'" name="image[]" type="file" class="form-control" value=""></div></div> <div class="col-sm-6"><div class="mb-3"><label for="dy_title">Title</label><input id="dy_title_'+dy_title_row_id+'" name="dy_title[]" type="text" class="form-control dy_title" value=""></div></div><div class="col-sm-2"><div class="mb-3"><button type="button" style="width:100px;border-radius: 4px;margin-top: 28px;padding: 8px;" class="btn btn-danger btn-sm" onclick="remove_file('+dy_title_row_id+');"><i class="fa fa-times"></i></button></div></div></div>';
        $("#note_box_div").append(html);
    });
    function remove_file(row_id,id) {
      $(".remove_txt_"+row_id).remove();
      if(id)
      {    
        $('#remove_innn').val(function(i, val){
              return [val + (!val ? '' : ',') + id];
        });
      }
    }

    $("#add_size").click(function(){ 
      var dy_title_length = $(".size_title").length; 
      var dy_title_row_id = dy_title_length + 1;  
        var html = '<div class="row remove_size_'+dy_title_row_id+'"><div class="col-sm-10"><div class="mb-3"><label for="size_title">Title</label><input id="size_title_'+dy_title_row_id+'" name="size_title[]" type="text" class="form-control size_title" value=""></div></div><div class="col-sm-2"><div class="mb-3"><button type="button" style="width:100px;border-radius: 4px;margin-top: 28px;padding: 8px;" class="btn btn-danger btn-sm" onclick="remove_sizes('+dy_title_row_id+');"><i class="fa fa-times"></i></button></div></div></div>';
        $("#size_box_div").append(html);
    });

    function remove_sizes(row_id,id) {
      $(".remove_size_"+row_id).remove();
      if(id)
      {    
        $('#remove_size').val(function(i, val){
              return [val + (!val ? '' : ',') + id];
        });
      }
    }

    $("#add_storage").click(function(){ 
      var dy_title_length = $(".storage_title").length; 
      var dy_title_row_id = dy_title_length + 1;  
        var html = '<div class="row remove_storage_'+dy_title_row_id+'"><div class="col-sm-10"><div class="mb-3"><label for="storage_title">Title</label><input id="storage_title_'+dy_title_row_id+'" name="storage_title[]" type="text" class="form-control storage_title" value=""></div></div><div class="col-sm-2"><div class="mb-3"><button type="button" style="width:100px;border-radius: 4px;margin-top: 28px;padding: 8px;" class="btn btn-danger btn-sm" onclick="remove_storages('+dy_title_row_id+');"><i class="fa fa-times"></i></button></div></div></div>';
        $("#storage_box_div").append(html);
    });

    function remove_storages(row_id,id) {
      $(".remove_storage_"+row_id).remove();
      if(id)
      {    
        $('#remove_storage').val(function(i, val){
              return [val + (!val ? '' : ',') + id];
        });
      }
    }
</script>