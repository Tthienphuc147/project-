@extends('admin.master')
@section('tieudetrangadmin')
Quản lý bài viết
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Thêm bài viết</h2>

          <div class="twothirds">
                <form action="/admin-baiviet-danhsach/them" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group" hidden="true" >
                    <p><label>ID</label></p>
            <input class="form-control input-width" type="text" name="id"/>
                </div>
                <div class="form-group">
                        <p><label>Chọn danh mục</label></p>
                        <select class="form-control input-width subcatefield" name="namecate" >
                            <option value="1">ĂN UỐNG</option>
                            <option value="2">DU LỊCH</option>
                            <option value="3">GIẢI TRÍ</option>

                        </select>
                    </div>

            <label >Tên bài viết:</label>
            <input type="text" name="namepost"  />
            <label >Tên bài viết không dấu:</label>
            <input type="text" name="namepost1"  />
            <label >Ảnh giới thiệu:</label>
            <input Value="" type="file" name="anh"/>
            <label >Địa chỉ:</label>
            <input type="text" name="address"    />
            <label >Thời gian mở cửa:</label>
            <input type="text" name="timeopen"   />
            <label >Giá tiền:</label>
            <input type="text" name="price"    />
            <label >Map:</label>
            <input type="text" name="map"    />
            <div class="form-group">
                    <p><label>Nội Dung Bài Viết</label></p>
                    <textarea name="detailpost" id="demo" class="form-control" rows="3" >
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
            <input type="submit" value="Thêm" />



          </div>


        </form>
      </section>
@endsection

