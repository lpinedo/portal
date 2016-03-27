<?php $this->load->view('header'); ?>

  <body>

    <?php $this->load->view('topnav'); ?>

    <div class="container-fluid">
    
      <div class="row">
        <?php $this->load->view('topnav2'); ?>

          <?php $this->load->view($module.'/'.$view);?>



        
      </div>
    </div>
    

<?php $this->load->view('footer'); ?>