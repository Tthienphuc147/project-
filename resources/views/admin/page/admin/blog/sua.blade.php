@extends('admin.master')
@section('tieudetrangadmin')
Quản lý blog
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Sửa blog</h2>

        <div class="twothirds">
                <form action="/admin-blog-danhsach/sua" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  hidden="true">
                    <p><label>ID</label></p>
            <input class="form-control input-width" type="text" name="id" value="{{$datablog[0]['id']}}" />
            </div>

            <label >Tên blog:</label>
            <input type="text" name="nameblog"  value="{{$datablog[0]['tieudeblog']}}"  />
            <label >Tên blog không dấu:</label>
            <input type="text" name="nameblog1"  value="{{$datablog[0]['tieudekhongdau']}}"  />
            <label >Mô tả:</label>
            <input type="text" name="des"    value="{{$datablog[0]['mota']}}"/>
            <div class="form-group">
                    <p><label>Chọn danh mục</label></p>
                    <select class="form-control input-width subcatefield" name="namecate" >
                        <option value="1">DU LỊCH</option>
                        <option value="2">MẸO VẶT</option>
                        <option value="3">THỜI TRANG</option>

                    </select>
            </div>
            <img src="public/img/{{ $datablog[0]['anhmota'] }}" alt="">
            <label >Ảnh mô tả:</label>
            <input Value="" type="file" name="anh"/>
            <div class="form-group">
                    <p><label>Nội Dung blog</label></p>
                    <textarea name="detailblog" id="demo" class="form-control" rows="3"  >
                            {{ $datablog[0]['noidung'] }}
                    </textarea>
                    <script>
                    CKEDITOR.replace('demo', {
                        language: 'vi',
                        filebrowserBrowseUrl: 'public/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: 'public/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl: 'public/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl: '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl: '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    });
                    </script>
                    <p><b>Chú ý:</b> Có thể soạn thảo trước dưới word rồi copy dán lên hoặc soạn thảo trực tiếp với các chức năng như word trên này. Thêm video hoặc các file đính kèo khác thông qua nút thêm file trên trình soạn thảo.<p>
            </div>

            <input type="submit" value="Sửa" />



          </div>


        </form>
      </section>
@endsection

