@extends('admin.master')
@section('tieudetrangadmin')
Quản lý hình ảnh
@endsection
@section('contentadmin')
<section class="panel ">
        <h2>Danh sách hình ảnh</h2>
        <table>
          <tr>
            <th>Id</th>
            <th>Ảnh</th>

          </tr>
          @foreach ($dataanh as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td><img src="" alt=""></td>
                <td><a href="/admin-danhmuc-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="/admin-danhmuc-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>
</section>

@endsection

