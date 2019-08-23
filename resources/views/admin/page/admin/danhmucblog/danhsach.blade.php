@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục
@endsection
@section('contentadmin')
<section class="panel ">
        <h2>Danh sách danh mục</h2>
        <table>
          <tr>
            <th>Id</th>
            <th>Tên danh mục</th>

          </tr>
          @foreach ($datadanhmucblog as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['tenloaiblog']}}</td>
                <td><a href="/admin-danhmucblog-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="/admin-danhmucblog-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>
</section>

@endsection

