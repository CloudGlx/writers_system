<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
//USER ROUTES
$routes->add('register_acct','AuthUser::userRegisterView');
$routes->add('user/reg','AuthUser::userRegister');
$routes->add('userlogin','AuthUser::userLoginView');
$routes->add('user/login','AuthUser::userLogin');
$routes->add('user_logout','AuthUser::userLogout');
$routes->add('client','Client::dashboard',['filter'=>'authclient']);
$routes->add('email_support','Email::sendmail_view',['filter'=>'authclient']);


/*************ORDERS ROUTES  CLINETS*/
$routes->add('order_new','Orders::new_order',['filter'=>'authclient']);
$routes->add('order/submit','Orders::order_submit');
$routes->add('orders_all','Orders::user_allorders',['filter'=>'authclient']);
$routes->add('orders_inprogress','Orders::user_inprogress',['filter'=>'authclient']);
$routes->add('orders_completed','Orders::user_completed',['filter'=>'authclient']);
$routes->add('orders_inreview','Orders::user_inreview',['filter'=>'authclient']);
$routes->add('orders_pending','Orders::Pending_Orders',['filter'=>'authclient']);
$routes->add('orders_inrevision','Orders::user_inrevision',['filter'=>'authclient']);
$routes->add('orders_rejected','Orders::user_rejected',['filter'=>'authclient']);
$routes->add('orderview/(:num)','Orders::OrderView/$1',['filter'=>'authclient']);
$routes->add('order_cancle/(:any)','Orders::Order_Cancle/$1',['filter'=>'authclient']);
$routes->add('file_upload/(:num)','Orders::FilesUploadView/$1',['filter'=>'authclient']);
$routes->add('upload_files','Orders::files_upload',['filter'=>'authclient']);
$routes->add('downoad_file','Orders::files_download',['filter'=>'authclient']);
$routes->add('delete_file/(:num)','Orders::files_delete/$1',['filter'=>'authclient']);


/*************ADMIN ROUTES ***********************/
$routes->add('adminlogin','AuthAdmin::AdminLogin');
$routes->add('admin','Admin::dashboard',['filter'=>'authadmin']);


/*************ORDERS ROUTES  ADMIN*/
$routes->add('all_orders','Admin::admin_allorders',['filter'=>'authadmin']);
$routes->add('pending_orders','Admin::Pending_Orders',['filter'=>'authadmin']);
$routes->add('in_progress','Admin::Inprogres_Orders',['filter'=>'authadmin']);
$routes->add('in_revision','Admin::Inrevision_Orders',['filter'=>'authadmin']);
$routes->add('cancelled_orders','Admin::Cancelled_Orders',['filter'=>'authadmin']);
$routes->add('rejected_orders','Admin::Rejected_Orders',['filter'=>'authadmin']);
$routes->add('vieworder/(:num)','Admin::admin_single_order/$1',['filter'=>'authadmin']);
$routes->add('all_clients','Admin::all_clients',['filter'=>'authadmin']);//CLIENT
$routes->add('view_client/(:num)','Admin::admin_single_client/$1',['filter'=>'authadmin']);//CLINTS
$routes->add('admin_logout','AuthAdmin::admin_logout',['filter'=>'authadmin']);
$routes->add('update/status','Admin::update_status',['filter'=>'authadmin']);
$routes->add('update/payments','Admin::payments_status',['filter'=>'authadmin']);
$routes->add('download_file/(:num)','Admin::file_download/$1',['filter'=>'authadmin']);
$routes->add('completed_orders','Admin::Completed_Orders',['filter'=>'authadmin']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
