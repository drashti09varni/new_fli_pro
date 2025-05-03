<link rel="stylesheet" href="<?php echo base_url();?>assets/toast/iziToast.min.css">
<script src="<?php echo base_url();?>assets/toast/iziToast.min.js"></script>
<script type="text/javascript">
    iziToast.settings({
        position: 'topRight',
    });
</script>
<script type="text/javascript">
<?php if($this->session->flashdata('success')){ ?>   
    iziToast.success({
        message: '<?php echo $this->session->flashdata('success');?>',
    }); 
<?php }else if($this->session->flashdata('error')){  ?>
    iziToast.error({
        message: '<?php echo $this->session->flashdata('error');$this->session->unset_userdata('error');?>',
    });
<?php }else if($this->session->flashdata('warning')){  ?>
    iziToast.warning({
        message: '<?php echo $this->session->flashdata('warning');$this->session->unset_userdata('warning');?>',
    });
<?php }else if($this->session->flashdata('info')){  ?>
    iziToast.info({
        message: '<?php echo $this->session->flashdata('info');$this->session->unset_userdata('info');?>',
    });
<?php }else if($this->session->flashdata('error_msg')){  ?>
    iziToast.error({
        message: '<?php echo $this->session->flashdata('error_msg');?>',
    });
<?php } ?>
</script>

<?php $this->session->unset_userdata('success'); ?>
<?php $this->session->unset_userdata('error'); ?>
<?php $this->session->unset_userdata('warning'); ?>
<?php $this->session->unset_userdata('info'); ?>