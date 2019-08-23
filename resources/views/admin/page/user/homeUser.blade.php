@extends('admin.master')
@section('tieudetrangadmin')
Quản lý
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Thông tin tài khoản </h2>
        <ul>
            <li> <img src="public/img/admin/{{$datanguoidung[0]['anh']}}" alt="" width="300px"></li>

          <li>Tên:{{$datanguoidung[0]['hotenUser']}}</li>
          <li>Email:{{$datanguoidung[0]['emailUser']}}</li>
          <li>Ngày sinh:{{$datanguoidung[0]['birthday']}}</li>
        </ul>
      </section>
@endsection

