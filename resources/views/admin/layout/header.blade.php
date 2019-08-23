<header role="banner">
        <h1>Trang quản lý</h1>
        <ul class="utilities">
          <li class="users"><a href="#">{{ request()->session()->get('hotenUser')}}</a></li>
          <li class="logout warn"><a href="/logout">Đăng xuất</a></li>
        </ul>
</header>
