
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php  
	  if($this->session->flashdata('success'))
		{
		?>
        <div class="alert alert-success alert-dismissible" id="success-alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-check"></i> Success!</b>
               <?php echo $this->session->flashdata('success')  ?>
                <script type="text/javascript">
                $("#success-alert").fadeTo(6000, 6000).fadeOut(6000, function(){
                $("#success-alert").fadeOut(6000);
                });
                </script>
              </div>
           
		<?php
        }
		?>
         <?php  if($this->session->flashdata('report'))
		{
		?>
        <div class="alert alert-danger alert-dismissible" id="success-alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-warning"></i> Alert!</b>
               <?php echo $this->session->flashdata('report')  ?>
                <script type="text/javascript">
                $("#success-alert").fadeTo(6000, 6000).fadeOut(6000, function(){
                $("#success-alert").fadeOut(6000);
                });
                </script>
              </div>
       
		<?php
        }
        ?>
		