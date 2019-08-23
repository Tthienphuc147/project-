@extends('admin.master')
@section('tieudetrangadmin')
Quản lý slide
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Danh sách slide</h2>
        <table>
          <tr>
            <th>Id</th>
            <th>Tên slide</th>
            <th>Mô tả</th>
            <th>Ảnh</th>

          </tr>
          @foreach ($dataslide as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['tenslide']}}</td>
                <td>{{$item['mota']}}</td>
                <td><img src="public/img/slide-img/{{$item['anh']}}" alt="" width="200px"></td>
                <td><a href="/admin-slide-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="/admin-slide-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>
</section>

@endsection

