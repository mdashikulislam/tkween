<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'site';
$route['translate_uri_dashes'] = false;



$route['404_override'] = 'site/not_found';
$route['author-guide'] = 'site/authorguide';
$route['view-contract'] = 'site/viewcontract';
$route['login'] = 'site/login';
$route['signup'] = 'site/signup';
$route['forgot-password'] = 'site/forgot_pass';
$route['verification/(:any)'] = 'site/verification_account';

//Admin Route
$route['dashboard/contract_detail/printing/(:num)'] = 'Dashboard/printing';
$route['dashboard/contract-messages'] = 'Message/contract_messages';
$route['dashboard/inbox'] = 'Message/inbox';
$route['dashboard/add-plan-type'] = 'Package/add_plan_type';
$route['dashboard/add_plan_type_data'] = 'Package/add_plan_type_data';
$route['dashboard/plan-types'] = 'Package/plan_types';
$route['dashboard/edit_plan_type/(:num)'] = 'Package/edit_plan_type';
$route['dashboard/delete_plan_type/(:num)'] = 'Package/delete_plan_type';
$route['dashboard/add-packages'] = 'Package/add_packages';
$route['dashboard/add_plan_package_data'] = 'Package/add_plan_package_data';
$route['dashboard/all-packages'] = 'Package/all_packages';
$route['dashboard/edit_package_plan/(:num)'] = 'Package/edit_package_plan';
$route['dashboard/delete_package/(:num)'] = 'Package/delete_package';
$route['dashboard/authors'] = 'Users/authors';
$route['dashboard/edit-author/(:num)'] = 'Users/edit_author';
$route['dashboard/users'] = 'Users/users';
$route['dashboard/pdf-contract'] = 'Setting/pdf_contract';
$route['dashboard/update_pdf_data'] = 'Setting/update_pdf_data';
$route['dashboard/limitations'] = 'Setting/limitations';
$route['dashboard/book-list'] = 'Book/book_list';
$route['dashboard/available-other-books'] = 'Book/available_other_books';
$route['dashboard/add_other_book_data_data'] = 'Book/add_other_book_data_data';
$route['dashboard/old-books'] = 'Book/old_books';
$route['dashboard/add_old_book_data_data'] = 'Book/add_old_book_data_data';
$route['dashboard/delete_other_book/(:num)'] = 'Book/delete_other_book';
$route['dashboard/delete_old_book/(:num)'] = 'Book/delete_old_book';
$route['dashboard/book-shelf'] = 'Book/book_shelf';
$route['dashboard/add_shelf_data'] = 'Book/add_shelf_data';
$route['dashboard/delete_shelf/(:num)'] = 'Book/delete_shelf';
$route['dashboard/edit_shelf_data'] = 'Book/edit_shelf_data';
$route['dashboard/sales-order'] = 'Sale/sales_order';
$route['dashboard/add_order_data'] = 'Sale/add_order_data';
$route['dashboard/delete_sale_order/(:num)'] = 'Sale/delete_sale_order';
$route['dashboard/distribution_orders'] = 'Sale/distribution_orders';
$route['dashboard/other-orders'] = 'Sale/other_orders';
$route['dashboard/delete_sale_order/(:num)'] = 'Sale/delete_sale_order';
$route['dashboard/prototype'] = 'Printing/prototype';
$route['dashboard/available-books'] = 'Printing/available_books';
$route['dashboard/add_printing_number_data'] = 'Printing/add_printing_number_data';
$route['dashboard/sales-order-list'] = 'Printing/sales_order_list';
$route['dashboard/delete_sale_order/(:num)'] = 'Sale/delete_sale_order';
$route['dashboard/other-orders-list'] = 'Printing/other_orders_list';
$route['dashboard/pending-publishing'] = 'Stage/pending_publishing';
$route['dashboard/correction'] = 'Stage/correction';
$route['dashboard/inner_design'] = 'Stage/inner_design';
$route['dashboard/bookcover'] = 'Stage/bookcover';
$route['dashboard/final-copies'] = 'Stage/final_copies';
$route['dashboard/final-copies2'] = 'Stage/final_copies2';
$route['dashboard/payments/(:any)'] = 'Finance/payments';
$route['dashboard/add-contract'] = 'Contact/add_contract';
$route['dashboard/add_contract_data'] = 'Contact/add_contract_data';
$route['dashboard/contracts'] = 'Contact/contracts';
$route['dashboard/contracts/(:any)'] = 'Contact/contracts';
$route['dashboard/contracts/(:any)/(:any)'] = 'Contact/contracts';
$route['dashboard/pcontract/(:num)'] = 'Contact/pcontract';
$route['dashboard/ministry/(:any)'] = 'Ministry/ministry';
//User Route
$route['user'] = 'User';
$route['user/packages'] = 'User/packages';
$route['user/contact-messages'] = 'User/contact_messages';
$route['user/edit-author'] = 'User/edit_author';
$route['user/update-author-data'] = 'User/update_author_data';
$route['user/add-contract-msg-data'] = 'User/add_contract_msg_data';
$route['user/upload-correction-file'] = 'User/upload_correction_file';
$route['user/upload-book-data'] = 'User/upload_book_data';
$route['user/add-contract/(:num)'] = 'User/add_contract';
$route['user/add-contract-data'] = 'User/add_contract_data';

