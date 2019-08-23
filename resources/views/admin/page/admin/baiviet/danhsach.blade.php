@extends('admin.master')
@section('tieudetrangadmin')
Quản lý bài viết
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Danh sách bài viết</h2>
        <table>
          <tr>
            <th>Id</th>
            <th>Danh mục</th>
            <th>Tiêu đề</th>
            <th>Ảnh giới thiệu</th>
            <th>Số lượt xem</th>
            <th>Địa chỉ</th>
            <th>Thời gian mở cửa</th>
            <th>Giá tiền</th>

          </tr>
          @foreach ($databaiviet as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td >{{$item['danhmuc_id']}}</td>
                <td>{{$item['tieude']}}</td>
                <td><img src="public/img/{{$item['anhgioithieu']}}" alt="" width="100px"></td>
                <td>{{$item['soluotxem']}}</td>
                <td>{{$item['diachi']}}</td>
                <td>{{$item['thoigianmocua']}}</td>
                <td>{{$item['gia']}}</td>
                <td><a href="/admin-baiviet-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="/admin-baiviet-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>
</section>

@endsection

