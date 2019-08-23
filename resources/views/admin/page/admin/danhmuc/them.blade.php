@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Thêm danh mục </h2>

          <div class="twothirds">
                <form action="/admin-danhmuc-danhsach/them" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  >
                    <p><label>ID</label></p>
            <input class="form-control input-width" type="text" name="id"  />
                </div>

            <label >Tên danh mục:</label>
            <input type="text" name="namecate"    />
            <label >Tên không dấu:</label>
            <input type="text" name="namecate1"    />

            <input type="submit" value="Thêm" />



          </div>


        </form>
      </section>
@endsection

