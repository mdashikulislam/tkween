                                        <style>


td
{
	padding: 0.2rem 0.6rem !important; 
}
.vertical-menu-icon .nav-pills .logobar {
    margin-bottom: 100px;
}
.nav-link {
    display: block;
    padding: 10px;
}
.pagination 
{
	float:left !important
}
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border: 1px solid #ddd; 
}

.pagination a.active {
  background-color: #700308;
  color: white;
  border: 1px solid #700308;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

.btn-secondary-rgba,  .btn-danger-rgba {
    border-radius: 3px;
    font-size: 13px !important;
    padding: 3px 10px !important;
}

td
{
	color:black !important
}
.table-bordered td {
    border: solid 1px #f2f3f7;
}
.table thead th {
     border: solid 1px #f2f3f7;
}
table.table-bordered.dataTable th, table.table-bordered.dataTable td
{
	border-left-width:1px !important
}
table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td
{
	border-bottom-width:1px !important
}
label
{
	color:black; font-weight:normal
}
.form-control {
    background-color: #ffffff;
    font-size: 16px;
    color: #8A98AC;
    border: 1px solid rgb(0 0 0 / 21%);
    border-radius: 0px;
}
.navbar-dark .navbar-nav .nav-link
{
	color:white !important
}
.dropdown-menu
{
	 border-radius:0  !important
}
.dropdown-item
{
	text-align:right !important
}
.dropdown-toggle::after
{
	display:none
}
.contentbar
{
	margin-top:0 !important
}
</style>
      <?php $conf =  $this->db->get('config')->result_array(); ?>
       <?php $user =  $this->db->where('id',$this->session->userdata('id'))->get('users')->result_array(); ?>
                               
    <div id="containerbar">
       <div class="topbar-mobile" style="position: relative !important">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="<?= $this->load->config->base_url() ?>dashboard" class="mobile-logo"><img style="width:100px !important;" src="<?= $this->load->config->base_url() ?><?= $conf[0]['logo'] ?>" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                               <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <?php if($user[0]['pic']==''): ?>
                                          <img src="<?= $this->load->config->base_url() ?>assets/images/users/profile.svg" class="img-fluid" alt="profile">
                                          <?php else: ?>
                                           <img src="<?= $this->load->config->base_url() ?><?= $user[0]['pic'] ?>" class="img-fluid" alt="profile">
                                          <?php endif ?>
                                          <span class="live-icon"><?= ucfirst($user[0]['name']) ?></span></a>
                                            <div class="dropdown-menu" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                      <h5><?= ucfirst($user[0]['name']) ?></h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="<?= $this->load->config->base_url() ?>dashboard/profile" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/crm.svg" class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="<?= $this->load->config->base_url() ?>dashboard/settings" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/email.svg" class="img-fluid" alt="email">Settings</a>
                                                        </li>                                                        
                                                        <li class="media dropdown-item">
                                                            <a href="<?= $this->load->config->base_url() ?>dashboard/logout" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                </li>
                                                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar" style="right: 0px;  position:relative !important">
            
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                        
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                            <a style="margin-right:30px"   href="<?= $this->load->config->base_url() ?>dashboard"><img src="<?= $this->load->config->base_url() ?><?= $conf[0]['logo'] ?>" width="100" class="img-fluid" alt="logo"></a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar" style="    width: 400px; margin-right: 30px;">
                                        <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/search">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn" type="submit" id="button-addonSearch"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                                </div>
                                                <input type="search" value="<?= $this->input->get('q') ?>" name="q" required class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addonSearch">   
                                                                                           
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0"  style="    margin-top: 15px;">
                                
                                
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <?php if($user[0]['pic']==''): ?>
                                          <img src="<?= $this->load->config->base_url() ?>assets/images/users/profile.svg" class="img-fluid" alt="profile">
                                          <?php else: ?>
                                           <img src="<?= $this->load->config->base_url() ?><?= $user[0]['pic'] ?>" class="img-fluid" alt="profile">
                                          <?php endif ?>
                                          <span class="live-icon"><?= ucfirst($user[0]['name']) ?></span><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                      <h5><?= ucfirst($user[0]['name']) ?></h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="<?= $this->load->config->base_url() ?>dashboard/profile" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/crm.svg" class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="<?= $this->load->config->base_url() ?>dashboard/settings" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/email.svg" class="img-fluid" alt="email">Settings</a>
                                                        </li>                                                        
                                                        <li class="media dropdown-item">
                                                            <a href="<?= $this->load->config->base_url() ?>dashboard/logout" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
  
   
     
     
     <nav class="navbar navbar-expand-md bg-dark navbar-dark" style="background:#830b0d !important">
  <!-- Brand -->
  <a class="navbar-brand" href="#"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav"  style="    width: fit-content; margin: 0 auto;">
      <li class="nav-item">
        <a class="nav-link" href="<?= $this->load->config->base_url() ?>dashboard/">الرئيسية</a>
      </li>
     
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      العقود <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/add-contract">إضافة عقد جديد</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/contracts/new">العقود الجديدة</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/contracts/pending">العقود المعلقة</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/contracts/inprogress">العقود المعتمدة</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/contracts/old_new">العقود الجديدة (لوحة التحكم القديمة)</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/contracts/old_processed">عقود في التشغيل (لوحة التحكم القديمة)</a>
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      المالية <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/payments/pending">العقود الجديدة
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/payments/paid">العقود المدفوعة</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/payments/notcompleted">عقود مدفوعة جزئيا</a>
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      مراحل الكتاب <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/pending-publishing">إستلام الكتاب</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/correction">التدقيق</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/inner_design">التنفيذ</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/bookcover">تصميم الغلاف</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/final-copies">Final Copy (v1)</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/final-copies2">Final Copy (v2)</a>
       
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      الوزارة <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        
        
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/ministry/pending">Pending</a>
          <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/ministry/completed">completed</a>
            <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/ministry/rejected">rejected</a>
       
       
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      المطبعة <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
       <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/prototype">Prototype</a>
        
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/available-books">New Books (Published)</a>
        
        <!-- <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/old_books">Old Books</a>
         <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/available_other_books">الكتب الجديدة</a>-->
         
           <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/sales-order-list">Sales Orders</a>
         <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/distribution_orders_list">Distribution Orders</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/other-orders-list">Other Orders</a>
         
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Sales <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/sales-order">Add Sales Orders</a>
         <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/distribution_orders">Add Distribution Orders</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/other-orders">Add Other Orders</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      الكتب <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/book-list" >
            Archives
        </a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/book-shelf" >
            Book Shelf
        </a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      الإعدادات <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
       <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/pdf-contract" >
            PDf Contracts
        </a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/tracking_log" >
            Tracking Log 
        </a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/limitations" >
            Limitations
        </a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/branches" >
            Branches
        </a>
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      المستخدمون <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/authors">Authors</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/users">Users</a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      الباقات <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/add-plan-type">Add Plans Type</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/plan-types">All Plan Type</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/add-packages">Add Packages</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/all-packages">All Packages</a>
      </div>
    </li>
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      الرسائل  <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/contract-messages"> خدمة المؤلفين</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>dashboard/inbox">رسائل عامة</a>
      </div>
    </li>
    
     
    </ul>
  </div>
</nav>
    	
    
    </div>
           
       