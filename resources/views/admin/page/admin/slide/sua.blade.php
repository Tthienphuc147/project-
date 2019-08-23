@extends('admin.master')
@section('tieudetrangadmin')
Quản lý slide
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Sửa slide</h2>

          <div class="twothirds">
                <form action="/admin-slide-danhsach/sua" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  >
                    <p><label>ID</label></p>
            <input class="form-control input-width" type="text" name="id" value="{{$dataslide[0]['id']}}" />
                </div>

            <label >Tên slide:</label>
            <input type="text" name="tenslide"   value="{{$dataslide[0]['tenslide']}}" />
            <label >Mô tả:</label>
            <input type="text" name="mota"   value="{{$dataslide[0]['mota']}}" />
            <label >Ảnh mô tả:</label>
            <img src="public/img/slide-img/{{$dataslide[0]['anh']}}" alt="" width="200px">
            <input Value="" type="file" name="anh"/>
            <input type="submit" value="Sửa" />



          </div>


        </form>
      </section>
@endsection

