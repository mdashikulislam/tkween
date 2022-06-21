<!-- Start Breadcrumbbar -->                    

<?php $package =  $this->db->where('id',$this->uri->segment(3))->get('books_package')->result_array(); ?>
<?php $type =  $this->db->where('id',$package[0]['pid'])->get('books_type')->result_array(); ?>
           <?php if(count($package)==0)
		   {
			   redirect(base_url('user/packages'));
		   }?>
            <div class="contentbar" style="margin-top:80px;">                
                
                
                <?php $user =  $this->db->where('id',$this->session->userdata('id'))->get('users')->result_array(); ?>
                <?php $branch =  $this->db->where('name','جدة')->get('branches')->result_array(); ?>
                <div class="row">
              
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                          	
                            <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Add Contract</h5>
                                <p>
                                
                                </p>
                            </div>
                            <div class="card-body ">
                            <form method="post" action="<?= $this->load->config->base_url() ?>user/add-contract-data">
                            <table class="table">
                            <tr  style="background:#830b0d; color:white">
                               	<th colspan="3">Selected Package </th>
                               </tr>
                                <tr >
                               	
                               
                                <td>
                                     <b>Package	</b>
                                    <br />
									<?= $type[0]['name'] ?>
                                    <input type="hidden" name="package_name"  value="<?= $type[0]['name'] ?>"/>
                                    <input type="hidden" name="package_id"  value="<?= $package[0]['id'] ?>"/>
                                     <input type="hidden" name="branch_id"  value="<?= $branch[0]['id'] ?>"/>
                                </td>
                                <td>
                                     <b>Price	</b>
                                    <br />
                                    <?= $package[0]['price'] ?>
                                    <input type="hidden" name="price"  value="<?= $package[0]['price'] ?>"/>
                                </td>
                                <td>
                                     <b>Percentage		</b>
                                    <br />
                                   <?= $package[0]['title'] ?>%
                                    <input type="hidden" name="discount"  value="<?= $package[0]['title'] ?>"/>
                                </td>
                               </tr>
                                <tr>
                               	<td>
                                     <b>Size	</b>
                                    <br />
									<?= $type[0]['des'] ?>
                                    <input type="hidden" name="package_size"  value="<?= $type[0]['des'] ?>"/>
                                </td>
                                <td>
                                     <b>Color		</b>
                                    <br />
									<?= $package[0]['color'] ?>
                                    <input type="hidden" name="package_color"  value="<?= $package[0]['color'] ?>"/>
                                </td>
                                <td>
                                     <b>Type	</b>
                                     <br />
                                    <?= $package[0]['type'] ?>  <?php if($type[0]['type']==0): ?>
                                    pBook
                                    <?php else: ?>
                                    eBook
									<?php endif ?>
                                    <input type="hidden" name="package_type"  value="<?= $package[0]['type'] ?>"/>
                                     <input type="hidden" name="type"  value="<?= $type[0]['type'] ?>"/>
                                </td>
                               </tr>
                                 
                            	<tr  style="background:#830b0d; color:white">
                               	<th colspan="3">Basic Information</th>
                               </tr>
                               <tr>
                               	 <td >
                                     <label>Book Name		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['book_name'] ?>" name="book_name" required="">
                                </td>
                                <td >
                                     <label>Book Edition		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['edition'] ?>" name="edition" required="">
                                </td>
                                <td >
                                     <label>No, of Pages		</label>
                                    <input type="number" class="form-control" dir="rtl" value="<?= $rec[0]['book_name'] ?>" name="contact_pages" required="">
                                </td>
                               </tr>
                               <tr>
                               	<td>
                                     <label>الإسم</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $user[0]['name'] ?>" name="name" required="">
                                </td>
                                <td>
                                     <label>البريد الإلكتروني	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $user[0]['email'] ?>" name="email" required="">
                                </td>
                                <td>
                                     <label>رقم الهاتف	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $user[0]['phone'] ?>" name="phone" required="">
                                </td>
                               </tr>
                               <tr>
                               	<td>
                                     <label>رقم الهوية أو الجواز	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['pasport'] ?>" name="pasport" required="">
                                </td>
                                <td>
                                     <label>العنوان		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['title'] ?>" name="title" required="">
                                    
                                </td>
                                <td>
                                     <label>الجنسية	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['nationality'] ?>" name="nationality" required="">
                                </td>
                               </tr>
                               <tr>
                               	<td>
                                     <label>المدينة	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['city'] ?>" name="city" required="">
                                </td>
                                <td>
                                     <label>الدولة		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['country'] ?>" name="country" required="">
                                </td>
                                <td>
                                     <label>إسم البنك		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['bank_name'] ?>" name="bank_name" required="">
                                </td>
                               </tr>
                               <tr>
                               	<td  colspan="3">
                                     <label>رقم الايبان		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['bank_account_ipan'] ?>" name="bank_account_ipan" required="">
                                </td>
                                
                               </tr>
                               
                                <tr>
                               	<td>
                                    <input type="submit" value="Update" class="btn btn-primary" dir="rtl"  required="">
                                </td>
                                
                                
                               </tr>
                            </table>
                            </form>
                            
                            
                            
                            
                        </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>