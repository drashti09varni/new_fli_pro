<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="<?php echo (@$this->uri->segment(1)=='')?'mm-active':'';?>">
                    <a href="<?php echo base_url('dashboard');?>" >
                        <i data-feather="home"></i>                      
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>                 
                <li class="<?php echo (@$this->uri->segment(1) == 'categories' || @$this->uri->segment(1) == 'add-categories')?'mm-active':'';?>">
                    <a href="<?php echo base_url('categories');?>">
                        <i class="fa fa-sitemap"></i>                     
                        <span data-key="t-blogs">Categories</span>
                    </a>
                </li>                
                <li class="<?php echo (@$this->uri->segment(1) == 'products' || @$this->uri->segment(1) == 'add-products')?'mm-active':'';?>">
                    <a href="<?php echo base_url('products');?>">
                        <i class="fa fa-cube"></i>                     
                        <span data-key="t-blogs">Products </span>
                    </a>
                </li>   
                <li class="<?php echo (@$this->uri->segment(1)=='web-setting')?'mm-active':'';?>">
                    <a href="<?php echo base_url('web-setting');?>">
                        <i data-feather="cpu"></i>                     
                        <span data-key="t-blogs">Setting</span>
                    </a>
                </li>
                 <li class="<?php echo (@$this->uri->segment(1)=='password')?'mm-active':'';?>">
                    <a href="<?php echo base_url('password');?>">
                        <i data-feather="cpu"></i>                     
                        <span data-key="t-blogs">password</span>
                    </a>
                </li>         
            </ul>
            
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<div class="main-content">