@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục blog
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Thêm danh mục blog</h2>

          <div class="twothirds">
                <form action="/admin-danhmucblog-danhsach/them" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  >
                    <p><label>ID</label></p>
            <input class="form-control input-width" type="text" name="id"  />
                </div>

            <label >Tên danh mục:</label>
            <input type="text" name="namecate"    />
            <label >Tên danh mục khong dau:</label>
            <input type="text" name="namecate1"    />

            <input type="submit" value="Thêm" />



          </div>


        </form>
      </section>
@endsection

