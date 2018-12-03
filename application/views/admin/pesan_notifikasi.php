<div class="col-md-1"></div>
<div class="col-md-10">
  <?php
  $info = $this->session->flashdata('info');
      if (!empty($info)){
        echo $info;
      }else {
  }?>
</div>
<div class="col-md-1"></div>