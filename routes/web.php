<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','homeController@showhome');
Route::get('contact','homeController@showContact');
Route::get('showlogin','loginController@checklogin');
Route::post('showlogin/login','loginController@LoginAuth');
Route::get('quanan/{unsigned_name}','PostController@Baiviet');
Route::get('diadiem/{unsigned_name}','PostController@Baiviet1');
Route::get('blog/{unsigned_name}','BlogController@blog');
Route::get('danhmuc/{unsigned_name}','categoryController@Baiviet');
Route::get('danhmucdiadiem/{unsigned_name}','categoryController@Baiviet1');
Route::get('listblog','categoryController@Blog');
Route::get('listblog/blog/{unsigned_name}','BlogController@blog');
Route::get('danhmuc/Bai-viet/{unsigned_name}','PostController@Baiviet');
Route::get('danhmuc/Bai-viet/{unsigned_name}','PostController@Baiviet');
route::get('/logout','loginController@Logout');
Route::get('useradmin','userController@showAdminUser');
Route::get('admin','adminController@showAdmin');
Route::get('edituseradmin','userController@showEditUser');
Route::post('edituseradmin/sua','userController@editUser');

Route::get('like/{id}','PostController@Like');
Route::post('/baiviet/comment/{id}','commentController@Them');

Route::get('/admin-danhmuc-danhsach','adminController@danhSachDanhMuc');
Route::get('admin-danhmuc-them','adminController@showThemDanhMuc');
Route::post('admin-danhmuc-danhsach/them','adminController@insertDanhMuc');
Route::get('/admin-danhmuc-danhsach/sua/{id}','adminController@showUpdateDanhMuc');
Route::post('/admin-danhmuc-danhsach/sua','adminController@updateDanhMuc');
Route::get('/admin-danhmuc-danhsach/xoa/{id}','adminController@deleteDanhMuc');



Route::get('/admin-baiviet-danhsach','adminController@danhSachBaiViet');
Route::get('admin-baiviet-them','adminController@showThemBaiViet');
Route::post('admin-baiviet-danhsach/them','adminController@insertBaiViet');
Route::get('/admin-baiviet-danhsach/sua/{id}','adminController@showUpdateBaiViet');
Route::post('/admin-baiviet-danhsach/sua','adminController@updateBaiViet');
Route::get('/admin-baiviet-danhsach/xoa/{id}','adminController@deleteBaiViet');



Route::get('/admin-danhmucblog-danhsach','adminController@danhSachDanhMucBlog');
Route::get('admin-danhmucblog-them','adminController@showThemDanhMucBlog');
Route::post('admin-danhmucblog-danhsach/them','adminController@insertDanhMucBlog');
Route::get('/admin-danhmucblog-danhsach/sua/{id}','adminController@showUpdateDanhMucBlog');
Route::post('/admin-danhmucblog-danhsach/sua','adminController@updateDanhMucBlog');
Route::get('/admin-danhmucblog-danhsach/xoa/{id}','adminController@deleteDanhMucBlog');






Route::get('/admin-blog-danhsach','adminController@danhSachBlog');
Route::get('admin-blog-them','adminController@showThemBlog');
Route::post('admin-blog-danhsach/them','adminController@insertBlog');
Route::get('/admin-blog-danhsach/sua/{id}','adminController@showUpdateBlog');
Route::post('/admin-blog-danhsach/sua','adminController@updateBlog');
Route::get('/admin-blog-danhsach/xoa/{id}','adminController@deleteBlog');



Route::get('/admin-slide-danhsach','adminController@danhSachSlide');
Route::get('admin-slide-them','adminController@showThemSlide');
Route::post('admin-slide-danhsach/them','adminController@insertSlide');
Route::get('/admin-slide-danhsach/sua/{id}','adminController@showUpdateSlide');
Route::post('/admin-slide-danhsach/sua','adminController@updateSlide');
Route::get('/admin-slide-danhsach/xoa/{id}','adminController@deleteSlide');


Route::get('/admin-danhmucanh-danhsach','adminController@danhSachDanhMucAnh');
Route::get('admin-danhmucanh-them','adminController@showThemDanhMucAnh');
Route::post('admin-danhmucanh-danhsach/them','adminController@insertDanhMucAnh');
Route::get('/admin-danhmucanh-danhsach/sua/{id}','adminController@showUpdateDanhMucAnh');
Route::post('/admin-danhmucanh-danhsach/sua','adminController@updateDanhMucAnh');
Route::get('/admin-danhmucanh-danhsach/xoa/{id}','adminController@deleteDanhMucAnh');