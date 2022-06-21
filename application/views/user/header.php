<style>
td
{
	padding: 0.2rem 0.6rem !important; 
}
.vertical-menu-icon .nav-pills .logobar {
    margin-bottom: 100px;
}

.pagination 
{
	float:left !important
}
.btn-secondary-rgba,  .btn-danger-rgba {
    border-radius: 3px;
    font-size: 13px !important;
    padding: 3px 10px !important;
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
                            <a href="<?= $this->load->config->base_url() ?>user" class="mobile-logo"><img src="<?= $this->load->config->base_url() ?><?= $conf[0]['logo'] ?>" class="img-fluid" alt="logo"></a>
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
                                                            <a href="<?= $this->load->config->base_url() ?>user/edit-author" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/crm.svg" class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                                                                               
                                                        <li class="media dropdown-item">
                                                            <a href="<?= $this->load->config->base_url() ?>user/logout" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
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
                                            <a style="margin-right:30px"   href="<?= $this->load->config->base_url() ?>user"><img src="<?= $this->load->config->base_url() ?><?= $conf[0]['logo'] ?>" width="200" class="img-fluid" alt="logo"></a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar" style="    width: 400px;
    margin-right: 30px;">
                                        <form method="get" action="<?= $this->load->config->base_url() ?>user/search">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn" type="submit" id="button-addonSearch"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                                </div>
                                                <input type="search" value="<?= $this->input->get('q') ?>" name="q" required class="form-control" placeholder="Search Contract" aria-label="Search" aria-describedby="button-addonSearch">   
                                                                                           
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
                                                            <a href="<?= $this->load->config->base_url() ?>user/edit-author" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/crm.svg" class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                                                                             
                                                        <li class="media dropdown-item">
                                                            <a href="<?= $this->load->config->base_url() ?>user/logout" class="profile-icon"><img src="<?= $this->load->config->base_url() ?>assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
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
        <a class="nav-link" href="<?= $this->load->config->base_url() ?>user/">الرئيسية</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= $this->load->config->base_url() ?>user/contact-messages">خدمة المؤلفين</a>
      </li>
     <!--
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Contracts <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/packages">Add New Contracts</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/contracts/new">New Submitted</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/contracts/pending">Pending</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/contracts/inprogress">Inprogress</a>
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Payments <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/payments/pending">Pending</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/payments/paid">Paid</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/payments/notcompleted"> Not Completed</a>
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Publishing <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/pending_publishing">Awaiting Book</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/correction">Correction</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/inner_design">Inner Design</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/bookcover">Book Cover</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/prototype1">Prototype (v1)</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/ministry">Ministry</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/prototype2">Prototype (v2)</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/printing">Printing</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Printing <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/available_books">Available Books</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/distribution_orders">Distribution Order</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/sales_order">Sales Order</a>
        <a class="dropdown-item" href="<?= $this->load->config->base_url() ?>user/other_orders">Other Orders</a>
      </div>
    </li>
   -->
     
    </ul>
  </div>
</nav>
    	
    
    </div>
           
       