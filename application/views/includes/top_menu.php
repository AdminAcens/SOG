<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php echo site_url('index')?>"><img src="<?php echo base_url(); ?>img/acens.png"></a>
      <ul class="nav">
        <li class="divider-vertical"></li>
        <li id="nav-add"><?php echo anchor('index', 'Add'); ?></li>
        <li class="divider-vertical"></li>
        <li id="nav-delete"><?php echo anchor('index', 'Delete'); ?></li>
        <li class="divider-vertical"></li>
        <li id="nav-edit"><?php echo anchor('index', 'Edit'); ?></li>
        <li class="divider-vertical"></li>
      </ul>
      <div class="pull-right">
        <small class="navbar-text">User: <? echo anchor('index', $this->session->userdata('email')); ?> </small>
        <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-primary"><i class="icon-road icon-white"></i> Logout</a>
      </div>
    </div>
  </div>
</div>