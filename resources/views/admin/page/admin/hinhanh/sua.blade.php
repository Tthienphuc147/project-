@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Sửa danh mục</h2>

          <div class="twothirds">
                <form action="/admin-danhmuc-danhsach/sua" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  >
                    <p><label>ID</label></p>
            <input class="form-control input-width" type="text" name="id" value="{{$datadanhmuc[0]['id']}}" />
                </div>

            <label >Tên danh mục:</label>
            <input type="text" name="namecate"   placeholder="{{$datadanhmuc[0]['tenloai']}}" />

            <input type="submit" value="Sửa" />



          </div>


        </form>
      </section>
@endsection

