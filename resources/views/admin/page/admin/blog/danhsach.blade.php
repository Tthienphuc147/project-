@extends('admin.master')
@section('tieudetrangadmin')
Quản lý blog
@endsection
@section('contentadmin')
<section class="panel important ">
        <h2>Danh sách blog</h2>
        <table>
          <tr>
            <th>Id</th>
            <th>Tên blog</th>
            <th>Ảnh mô tả</th>
            <th>Mô tả</th>
          </tr>
          @foreach ($datablog as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['tieudeblog']}}</td>
                <td><img src="public/img/{{$item['anhmota']}}" alt="" width="300px" height="150px"></td>
                <td>{{$item['mota']}}</td>
                <td><a href="/admin-blog-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="/admin-blog-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>
</section>

@endsection

