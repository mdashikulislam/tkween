<section class="content-header">
      <h1>
        اقرأ الرساله
      </h1>
     
    </section>

<section class="content">

      <div class="row">
      <div class="col-xs-12">
       </div>
        <div class="col-xs-12">
         <div class="box box-widget">
            
       
      
       
       <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><?= $rec[0]['sub'] ?> موضوع الرسالة هو </h3>
                <h5> <?= $rec[0]['email'] ?> - <?= $rec[0]['name'] ?>: من
                  <span class="mailbox-read-time pull-left"><?= $rec[0]['dt'] ?> </span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                 
                 <a href="<?= $this->load->config->base_url() ?>dashboard/contact_messages" class="btn btn-default btn-sm"  title="Go Back">
                    <i class="fa fa-reply"></i></a>
                     <a onclick="return confirm('Are you sure you want to Delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_msg/<?= $rec[0]['id'] ?>" class="btn btn-default btn-sm"  title="Delete">
                    <i class="fa fa-trash-o"></i></a>
                    
                  
                  </div>
              
               
               
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p style="font-size:13px"> <?= str_replace("\n",'<br>',$rec[0]['msg']) ?></p>              </div>
              <!-- /.mailbox-read-message -->
            </div>
       
          </div>

        </div>
      </div>
    </section>