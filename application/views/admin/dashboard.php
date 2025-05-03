

<div class="page-content">

    <div class="container-fluid">



        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                    <h4 class="mb-sm-0 font-size-18">Welcome !</h4>



                    <div class="page-title-right">

                        <ol class="breadcrumb m-0">

                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>

                            <li class="breadcrumb-item active">Welcome !</li>

                        </ol>

                    </div>



                </div>

            </div>

        </div>

        <!-- end page title -->



        <div class="row">
            <div class="col-xl-6 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate" style="font-size: 16px;">Live Users</span>
                                <h4 class="mb-3">
                                   <?php echo $live_users;?>
                                </h4>                                
                            </div>

                            <div class="flex-shrink-0 text-end dash-widget">
                                <i class="fa fa-user" style="font-size: 54px;"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->             
            <div class="col-xl-6 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate" style="font-size: 16px;">Today's Users</span>
                                <h4 class="mb-3">
                                   <?php echo $visits_today;?>
                                </h4>                                
                            </div>

                            <div class="flex-shrink-0 text-end dash-widget">
                                <i class="fa fa-user" style="font-size: 54px;"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->   
          
            <div class="col-xl-6 col-md-6">

                <!-- card -->

                <div class="card card-h-100">

                    <!-- card body -->

                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1">

                                <span class="text-muted mb-3 lh-1 d-block text-truncate" style="font-size: 16px;">Total Categories</span>

                                <h4 class="mb-3">

                                   <?php echo $total_categories;?>

                                </h4>                                

                            </div>



                            <div class="flex-shrink-0 text-end dash-widget">

                                <i class="fa fa-sitemap" style="font-size: 54px;"></i>

                            </div>

                        </div>

                    </div><!-- end card body -->

                </div><!-- end card -->

            </div><!-- end col -->

            

            <div class="col-xl-6 col-md-6">

                <!-- card -->

                <div class="card card-h-100">

                    <!-- card body -->

                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1">

                                <span class="text-muted mb-3 lh-1 d-block text-truncate" style="font-size: 16px;">Total Products</span>

                                <h4 class="mb-3">

                                   <?php echo $total_products;?>

                                </h4>                                

                            </div>



                            <div class="flex-shrink-0 text-end dash-widget">

                                <i class="fa fa-cube" style="font-size: 54px;"></i>

                            </div>

                        </div>

                    </div><!-- end card body -->

                </div><!-- end card -->

            </div><!-- end col -->            

        </div><!-- end row-->



        <div class="row">

            <div class="col-xl-4">

                <div class="card">

                    <div class="card-header align-items-center d-flex">

                        <h4 class="card-title mb-0 flex-grow-1">Categories List</h4>

                    </div><!-- end card header -->

        

                    <div class="card-body px-0">

                        <div class="px-3" data-simplebar="init" style="max-height: 386px;"><div class="simplebar-wrapper" style="margin: 0px -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 16px;">

                            

                            <?php foreach($categories_list as $k => $v){ ?>

                            <div class="d-flex align-items-center pb-4">

                                <div class="avatar-md me-4">

                                    <img src="<?php echo $v['image'];?>" class="img-fluid rounded-circle" alt="">

                                </div>

                                <div class="flex-grow-1">

                                    <h5 class="font-size-15 mb-1"><a href="#" class="text-dark"><?php echo $v['name'];?></a></h5>

                                </div>

                            </div>

                            <?php } ?>

                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 424px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 351px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>

                    </div>

                    <!-- end card body -->

                </div>

                <!-- end card -->

            </div>

            <!-- end col -->

            

            <div class="col-xl-8">

                <div class="card">

                    <div class="card-header align-items-center d-flex">

                        <h4 class="card-title mb-0 flex-grow-1">Selling Products</h4>

                    </div><!-- end card header -->

        

                    <div class="card-body px-0 pt-2">

                            <div class="table-responsive px-3" data-simplebar="init" style="max-height: 395px;"><div class="simplebar-wrapper" style="margin: 0px -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 16px;">

                                <table class="table align-middle table-nowrap">

                                    <tbody>

                                       <?php foreach($product_list as $k => $v){ ?>

                                        <tr>

                                             <td style="width: 50px;">

                                                <div class="avatar-md me-4">

                                                    <img src="<?php echo base_url($v['image']);?>" class="img-fluid" alt="">

                                                </div>

                                            </td>

                                            <td>

                                                <div>

                                                    <h5 class="font-size-15"><a href="#" class="text-dark"><?php echo $v['product_name'];?></a></h5>

                                                    <span class="text-muted">Price :- <?php echo $v['price'];?></span>

                                                </div>

                                            </td>

                                        </tr>                                

                                        <?php } ?>        

                                    </tbody>

                                </table>

                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 454px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 343px; transform: translate3d(0px, 52px, 0px); display: block;"></div></div></div>

                    </div>

                    <!-- end card body -->

                </div>

                <!-- end card -->

            </div>

            <!-- end col -->

        

        </div>

    <!-- container-fluid -->

</div>

<!-- End Page-content -->



    