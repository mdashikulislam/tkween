
<section class="content-header">
      <h1>
   رسائل جهة الاتصال
              
      </h1>
      
    </section>

<section class="content">

      <div class="row">
     
        <div class="col-xs-12">
         <div class="box box-widget">
            
       
       
        
       
       <div class="box-body ">
              
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                   <?php foreach($rec as $mm): ?>
                  <tr>
                  
                      <td align="right"><a href="<?= $this->load->config->base_url() ?>dashboard/delete_msg/<?= $mm['id'] ?>" id="btn-delete" title="Delete Message" style="color:#CCC"><i class="fa fa-times" ></i> </a></td>
                       <td class="mailbox-date" style="color:#999"><?= $mm['dt'] ?> <?= $mm['tm'] ?></td>
                        <td class="mailbox-subject"><a style="color:inherit" href="<?= $this->load->config->base_url() ?>dashboard/read_message/<?= $mm['id'] ?>"> ...<?= substr($mm['msg'],0,70) ?> - <b><?= $mm['sub'] ?></b></a>
                    </td>
                    
                     <td class="mailbox-name"><a style="color:inherit" href="<?= $this->load->config->base_url() ?>dashboard/read_message/<?= $mm['id'] ?>"><?= $mm['name'] ?></a></td>
                    <td class="mailbox-star"><a href="<?= $this->load->config->base_url() ?>dashboard/read_message/<?= $mm['id'] ?>">
                    <?php  if($mm['status']==0):?>
                    <i class="fa fa-star text-yellow"></i>
                    <?php else: ?>
                     <i class="fa fa-star-o "></i>
                    <?php endif ?>
                    </a></td>
                   
                  
                    
                  </tr>
                  <?php endforeach ?>
                  
                  </tbody>
                </table>
                 <?php echo $this->pagination->create_links() ?>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
       
          </div>

        </div>
      </div>
    </section>