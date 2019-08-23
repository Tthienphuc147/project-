<nav role="navigation">
        <ul class="main">
             @if (request()->session()->get('role')=='user')
             <li class="information"><a href="#">Thông tin tài khoản</a></li>
             <li class="setting"><a href="edituseradmin">Cài đặt tài khoản</a></li>
             @else
             <ul class="information" style="padding-left:5px;padding-top:5px">
                    <h4>Quản lý danh mục bài viết</h4>
                    <li><a href="/admin-danhmuc-danhsach">Danh sách</a></li>
                    <li><a href="/admin-danhmuc-them">Thêm </a></li>
                </ul>
                <ul class="information" style="padding-left:5px;padding-top:5px">
                        <h4>Quản lý bài viết</h4>
                        <li><a href="/admin-baiviet-danhsach">Danh sách</a></li>
                        <li><a href="/admin-baiviet-them">Thêm </a></li>
                    </ul>
                    <ul class="information" style="padding-left:5px;padding-top:5px">
                            <h4>Quản lý danh mục blog</h4>
                            <li><a href="/admin-danhmucblog-danhsach">Danh sách</a></li>
                            <li><a href="/admin-danhmucblog-them">Thêm </a></li>
                        </ul>
                        <ul class="information" style="padding-left:5px;padding-top:5px">
                                <h4>Quản lý blog</h4>
                                <li><a href="/admin-blog-danhsach">Danh sách</a></li>
                                <li><a href="/admin-blog-them">Thêm </a></li>
                            </ul>
                            <ul class="information" style="padding-left:5px;padding-top:5px">
                                    <h4>Quản lý slide</h4>
                                    <li><a href="/admin-slide-danhsach">Danh sách</a></li>
                                    <li><a href="/admin-slide-them">Thêm </a></li>
                                </ul>
                                <ul class="information" style="padding-left:5px;padding-top:5px">
                                    <h4>Quản lý danh mục ảnh</h4>
                                    <li><a href="/admin-danhmucanh-danhsach">Danh sách</a></li>
                                    <li><a href="/admin-danhmucanh-them">Thêm </a></li>
                                </ul>
                                <ul class="information" style="padding-left:5px;padding-top:5px" hidden="true">
                                        <h4>Quản lý hình ảnh</h4>
                                        <li><a href="/admin-anh-danhsach">Danh sách</a></li>
                                        <li><a href="/admin-anh-them">Thêm </a></li>
                                    </ul>
             @endif

        </ul>
</nav>
