@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục ảnh
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Thêm danh mục ảnh</h2>

          <div class="twothirds">
                <form action="/admin-danhmucanh-danhsach/them" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
       
            <label >Tên danh mục:</label>
            <input type="text" name="namecate"    />

            <input type="submit" value="Thêm" />



          </div>


        </form>
      </section>
@endsection

