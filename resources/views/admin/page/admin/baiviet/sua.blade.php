@extends('admin.master')
@section('tieudetrangadmin')
Quản lý bài viết
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Sửa bài viết</h2>

          <div class="twothirds">
            <form action="/admin-baiviet-danhsach/sua" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group"  >
                        <p><label>ID</label></p>
                <input class="form-control input-width" type="text" name="id" value="{{$databaiviet[0]['id']}}" />
                    </div>

                <label >Tên bài viết:</label>
                <input type="text" name="namepost"   value="{{$databaiviet[0]['tieude']}}" />
                <label >Tên bài viết không dấu:</label>
                <input type="text" name="namepost1"   value="{{$databaiviet[0]['tieudekhongdau']}}" />
                <label >Ảnh giới thiệu:</label>
                <input Value="" type="file" name="anh"/>
                <label >Địa chỉ:</label>
                <input type="text" name="address"   value="{{$databaiviet[0]['diachi']}}" />
                <label >Thời gian mở cửa:</label>
                <input type="text" name="timeopen"  value="{{$databaiviet[0]['thoigianmocua']}}" />
                <label >Giá tiền:</label>
                <input type="text" name="price"   value="{{$databaiviet[0]['gia']}}" />
                <label >Map:</label>
                <input type="text" name="map"   value="{{$databaiviet[0]['map']}}" />
                <div class="form-group">
                        <p><label>Nội Dung Bài Viết</label></p>
                        <textarea name="detailpost" id="demo" class="form-control " rows="3" >
                                {{$databaiviet[0]['noidung']}}
                        </textarea>
                        <script>
                       CKEDITOR.replace( 'demo', {
        filebrowserBrowseUrl: "{{ asset('public/ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('public/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}"
    } );
                        </script>
                        <p><b>Chú ý:</b> Có thể soạn thảo trước dưới word rồi copy dán lên hoặc soạn thảo trực tiếp với các chức năng như word trên này. Thêm video hoặc các file đính kèo khác thông qua nút thêm file trên trình soạn thảo.<p>
                </div>
                <input type="submit" value="Sửa" />

            </form>

        </div>



      </section>

@endsection

