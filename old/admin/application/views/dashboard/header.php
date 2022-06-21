<!DOCTYPE html>
<html dir="rel">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $this->config->item('site_name') ?> Admin Dashboard</title>
  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="NOINDEX,NOFOLLOW" name="robots" />
	<link rel="shortcut icon" href="<?= $this->config->item('fev') ?>">	
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=$this->load->config->base_url() ?>cms-admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=$this->load->config->base_url() ?>cms-admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=$this->load->config->base_url() ?>cms-admin/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?=$this->load->config->base_url() ?>cms-admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=$this->load->config->base_url() ?>cms-admin/dist/css/skins/_all-skins.min.css">
  <script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  <style>
  *
  {
	  text-align:right !important
  }
  th
  {
	 
  }
  #btn-edit:hover
  {
	  color:green !important
  }
	.message-item {
margin-bottom: 25px;
margin-left: 40px;
position: relative;
}
.message-item .message-inner {
background: #f9f9f9;
border: 1px solid #ddd;
border-radius: 3px;
padding: 10px;
position: relative;
}
.message-item .message-inner:before {
border-right: 10px solid #ddd;
border-style: solid;
border-width: 10px;
color: rgba(0,0,0,0);
content: "";
display: block;
height: 0;
position: absolute;
left: -20px;
top: 6px;
width: 0;
}
.message-item .message-inner:after {
border-right: 10px solid #fff;
border-style: solid;
border-width: 10px;
color: rgba(0,0,0,0);
content: "";
display: block;
height: 0;
position: absolute;
left: -18px;
top: 6px;
width: 0;
}
.message-item:before {
background: #fff;
border-radius: 2px;
bottom: -30px;
box-shadow: 0 0 3px rgba(0,0,0,0.2);
content: "";
height: 100%;
left: -30px;
position: absolute;
width: 3px;
}
.message-item:after {
background: #fff;
border: 2px solid #ccc;
border-radius: 50%;
box-shadow: 0 0 5px rgba(0,0,0,0.1);
content: "";
height: 15px;
left: -36px;
position: absolute;
top: 10px;
width: 15px;
}
.clearfix:before, .clearfix:after {
content: " ";
display: table;
}

.message-item .message-head .avatar {
margin-right:13px;
}
.message-item .message-head .user-detail {
overflow: hidden;
}
.message-item .message-head .user-detail h5 {
font-size: 16px;
font-weight: bold;
margin: 0;
}
.message-item .message-head .post-meta {
float: left;
padding: 0 15px 0 0;
}
.message-item .message-head .post-meta >div {
color: #333;
font-weight: bold;
text-align: right;
}
.post-meta > div {
color: #777;
font-size: 12px;
line-height: 22px;
}
.message-item .message-head .post-meta >div {
color: #333;
font-weight: bold;
text-align: right;
}
.post-meta > div {
color: #777;
font-size: 12px;
line-height: 22px;
}

	  </style> 
<style>
.timeline>li>.fa, .timeline>li>.glyphicon, .timeline>li>.ion {
    width: 23px;
    height: 23px;
    font-size: 11px;
    line-height: 23px;
    position: absolute;
    color: #666;
    background: #d2d6de;
    border-radius:0 !important;
    text-align: center;
    left: 21px;
    top: 0;
}
.timeline>.time-label>span {
    font-weight: 600;
    padding: 4px;
    display: inline-block;
    background-color: #fff;
    border-radius: 0 !important;
    font-size: 11px;
}
.timeline-inverse>li>.timeline-item {
    background: #f0f0f07a;
    border:none;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 13px;
    color: inherit;
    font-weight: 600;
}
.cc {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.widget-user .widget-user-image>img {
    width: 123px;
    height: auto;
    border: 3px solid #fff;
}
.widget-user .widget-user-header {
    padding: 20px;
    height: 180px !important;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}
/* Hide the browser's default checkbox */
.cc input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 17px;
    width: 17px;
    background-color: white;
    border: solid 1px #ccc;
}

/* On mouse-over, add a grey background color */
.cc:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.cc input:checked ~ .checkmark {
  background-color: #228fe6;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.cc input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.cc .checkmark:after {
    left: 5px;
    top: 2px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
<style>

.skin-black .wrapper, .skin-black .main-sidebar, .skin-black .left-side {
    background-color: #700308;
}
.skin-black .sidebar-menu>li.header {
    color: #fff;
    background: #700308;
}
.skin-black .sidebar-menu>li:hover>a, .skin-black .sidebar-menu>li.active>a, .skin-black .sidebar-menu>li.menu-open>a {
    color: #fff;
    background: #700308;
}
.skin-black .sidebar-menu>li>.treeview-menu {
    margin: 0 1px;
    background: #700308;
}
.skin-black .main-header .logo {
    background-color: #700308 !important;
    color: white;
    border-bottom: 0 solid transparent;
    border-right: 0px solid #eee;
}
.bg-success
{
	display:none
}
.box-header.with-border {
    border-bottom: 1px solid #d2d6de;
    background: #f5f5f5;

}

.form-control
{
	border-radius:0;
}
.btn
{
	border-radius:0;
}

label
{
	font-weight:normal
}
.form-horizontal .form-group
{
	margin-left:0;
	margin-right:0
}
.table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #cecece;
}
.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    border-top: 1px solid #cecece;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 2px 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
	font-size: 13px;
}
.content
{
	padding-top:20px;
}
.skin-black .main-header li.user-header {
    background-color: #4287bd;
}
.widget-user .widget-user-image
{
	    position: absolute;
    top: 110px;
    left: 6%;
    margin-left: -45px;
}
.widget-user .widget-user-header {
    padding: 20px;
    height: 150px;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}
#btn-delete:hover
{
	color:#ca4e4e !important
}
.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #fbfbfb;
}
.sidebar-menu>li
{
	    border-bottom: solid 1px #ffffff1a;
}
.content-wrapper, .main-footer
{
	margin-left:0; margin-right:230px
}
.main-sidebar
{
	right:0;
	left:auto
}
.main-header .navbar
{
	margin-left:0; margin-right:230px;
}
.main-header .logo
{
	float:right
}
.main-header .navbar-custom-menu, .main-header .navbar-right
{
	float:left
}
</style>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="sidebar-mini skin-black fixed" style="background:#D6D6D6">
<div class="wrapper">

  <header class="main-header">
<!--
    <a href="<?=$this->load->config->base_url() ?>" class="logo" style="    background: #700308!important;">
      <span class="logo-mini"><?= $this->config->item('site_name') ?></span>
      الإدارة
    </a>
    -->

    <nav class="navbar navbar-static-top" >
      
      <?php 
	  $n1='';$n2='';$n3='';$n4='';$n5='';$n6='';$n7='';$n8='';$n9='';$n10='';$n11='';$n12='';$n13='';$n14='';
	  if($this->uri->segment(2)=='')
	  {
		  $n1='active';
	  }
	   if($this->uri->segment(2)=='main_menu')
	  {
		  $n2='active';
	  }
	   if($this->uri->segment(2)=='sub_menu')
	  {
		  $n3='active';
	  }
	  if($this->uri->segment(2)=='sub2_menu')
	  {
		  $n5='active';
	  }
	  if($this->uri->segment(2)=='slider')
	  {
		  $n4='active';
	  }
	  ?>
   
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <li class="dropdown user user-menu">
            <a href="<?= $this->load->config->base_url() ?>dashboard/logout" >
            
           تسجيل خروج

            </a>
            
          </li>
        
        </ul>
      </div>
        <span style="font-size:21px; padding-right:10px;padding-top: 10px !important; float:right">مرحبا بكم في ادارة تكوين
</span>
      
	
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel" style="    background: white!important">
          <img src="http://tkweenonline.com/assets/img/logo.png" class="img-responsive" >
        
      </div>
      
     
        <br><br>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
    
<!--     <li style="list-style:none; padding:7px; color:#b8c7ce; background:#700308!important">الملاحة الرئيسية
</li>
-->	
    
      <ul  id="myMenu" class="sidebar-menu" data-widget="tree" style="    margin-bottom: 182px;">
      
        <li>
          <a href="<?=$this->load->config->base_url() ?>dashboard/">
           <span>لوحة التحكم</span>   <i class="fa fa-dashboard"></i>
            
          </a>
         
        </li>
       
        <li class="<?= $n2 ?>">
          <a href="<?=$this->load->config->base_url() ?>dashboard/submitted_form/new">
           
            <span>العقود</span>
            <i class="fa fa-file-text-o"></i>
          </a>
          </li>
          
           <li class="<?= $n2 ?>">
          <a href="<?=$this->load->config->base_url() ?>dashboard/submitted_form/paid2">
           
            <span>التنفيذ</span>
            <i class="fa fa-file-text-o"></i>
          </a>
          </li>
          
          <li class="<?= $n2 ?>">
          <a href="<?=$this->load->config->base_url() ?>dashboard/submitted_form/finish">
           
            <span>الطباعه</span>
            <i class="fa fa-file-text-o"></i>
          </a>
          </li>
        <li class="<?= $n2 ?>">
          <a href="<?=$this->load->config->base_url() ?>dashboard/contact_messages">
           
            <span>رسائل</span>
            <i class="fa fa-user-o"></i>
          </a>
          </li>   
        <li class="<?= $n2 ?>">
          <a href="<?=$this->load->config->base_url() ?>dashboard/users">
           
            <span>المستخدمين</span>
            <i class="fa fa-user-o"></i>
          </a>
          </li>
          
         
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
  
  
  