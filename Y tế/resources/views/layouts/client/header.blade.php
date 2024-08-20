<header>
    <div class="top_header">
      <div class="time"> Giờ làm việc: Thứ Hai - Thứ Sáu: 8:00 - 16:30 - Thứ Bảy: 8:00 - 11:30 </div>
      <div class="top_icon">
        <ul class="ul_icon_top">
          <li class="li_icon_top"><a href="cpt.html"><i class="bi bi-facebook"></i></a></li>
          <li class="li_icon_top"><a href="cpt.html"><i class="bi bi-google"></i></a></li>
          <li class="li_icon_top"><a href="cpt.html"><i class="bi bi-instagram"></i></a></li>
          <li class="li_icon_top"><a href="/cpt.html"><i class="bi bi-youtube"></i></a></li>
          <li class="li_icon_top"><a href="/cpt.html"><i class="bi bi-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="menu_header">
      <div class="logo_header"><img src="{{ asset('img/Logo-CPT.png') }}" alt="" class="logo"></div>
      <div id="container-header">
        <ul id="ul_container">
         @foreach ($menus as $menu)
         <li class="li_container"><a href="{{ url($menu->slug) }}">{{ $menu->name }}</a> </li>             
         @endforeach
        </ul>
      </div>
    </div>
    </div>
  </header>