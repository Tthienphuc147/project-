@extends('admin.master')
@section('tieudetrangadmin')
Quản lý slide
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Thêm slide</h2>

          <div class="twothirds">
                <form action="/admin-slide-danhsach/them" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <label >Tên slide:</label>
            <input type="text" name="tenslide"    />
            <label >Mô tả:</label>
            <input type="text" name="mota" />
            <label >Ảnh mô tả:</label>
            <input Value="" type="file" name="anh"/>

            <input type="submit" value="Thêm" />



          </div>


        </form>
      </section>
@endsection

