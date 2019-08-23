@extends('admin.master')
@section('tieudetrangadmin')
Quản lý
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Cài đặt tài khoản</h2>

          <div class="twothirds">
                <form action="edituseradmin/sua" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  hidden="true">
                    <p><label>ID Người Dùng</label></p>
            <input class="form-control input-width" type="text" name="id" Value="{{$datanguoidung[0]['id']}}" />
                </div>

            <label >Họ và tên tài khoản:</label>
            <input type="text" name="namelogin"   placeholder="{{$datanguoidung[0]['hotenUser']}}" />
            <label >Ngày sinh:</label>
            <input type="text" name="birthday" type="date" placeholder="{{$datanguoidung[0]['birthday']}}" />
            <label >Email:</label>
            <input type="text" name="email"  type="email" placeholder="{{$datanguoidung[0]['emailUser']}}" />
            <label >Mật khẩu:</label>
            <input type="text" name="passlogin"  type="password" placeholder="{{$datanguoidung[0]['passUser']}}" />
            <label >Ảnh đại diện:</label>
            <img src="public/img/admin/{{$datanguoidung[0]['avatar']}}" alt="" width="300px">
                    <input Value="" type="file" name="anh"/>
            <input type="submit" value="Cập nhập" />



          </div>


        </form>
      </section>
@endsection

