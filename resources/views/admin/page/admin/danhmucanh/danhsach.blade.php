@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục ảnh
@endsection
@section('contentadmin')
<section class="panel ">
        <h2>Danh sách danh mục ảnh</h2>
        <table>
          <tr>
            <th>Id</th>
            <th>Tên danh mục ảnh</th>

          </tr>
          @foreach ($datadanhmuc as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['tenloai']}}</td>
                <td><a href="/admin-danhmucanh-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="/admin-danhmucanh-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>
</section>

@endsection

