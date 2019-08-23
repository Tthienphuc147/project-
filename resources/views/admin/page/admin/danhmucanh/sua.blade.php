@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục ảnh
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Sửa danh mục ảnh</h2>

          <div class="twothirds">
                <form action="/admin-danhmucanh-danhsach/sua" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  >
                    <p><label>ID</label></p>
            <input class="form-control input-width" type="text" name="id" value="{{$datadanhmucanh[0]['id']}}" />
                </div>

            <label >Tên danh mục :</label>
            <input type="text" name="namecate"   placeholder="{{$datadanhmucanh[0]['tenloai']}}" />

            <input type="submit" value="Sửa" />



          </div>


        </form>
      </section>
@endsection

