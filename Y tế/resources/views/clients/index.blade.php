@extends('layouts.client.index')
@section('content')
<style>
  
</style>
<div class="backgruond-img">
    <div class="background"></div>
    <div class="background-text">
      <p style="font-size: 60px; color: #1E3461; padding: 20px 0;">AN TOÀN & HIỆU QUẢ </p>
      <P style="font-size: 30px; color: #1E3461;"> Trong từng ca mổ </P>
      <div class="xemthem"><a href="/cpt2.html"> XEM THÊM <i class="bi bi-chevron-right"
            style="float: right; padding-right: 5px;"></i> </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="content-container">
      <ul class="ul-content">
        <li class="li-content"><img src="{{ asset('img/dayduchungloai.png') }}" alt="" srcset="">
          <p>ĐÂỲ ĐỦ <BR> CHỦNG LOẠI </p>
        </li>
        <li class="li-content"><img src="{{ asset('img/giacaphuhop.png') }}" alt="" srcset="">
          <p style="padding-top: 25px;">GIÁ CẢ PHÙ HỢP </p>
        </li>
        <li class="li-content"><img src="{{ asset('img/tieuchuaniso-fda.png') }}" alt="" srcset="">
          <P>TIÊU CHUẨN <BR>
            ISO | FDA</P>
        </li>
        <li class="li-content"><img src="{{ asset('img/giaohangnhanhchong.png') }}" alt="" srcset="">
          <p> GIAO HÀNG <BR> NHANH CHÓNG </p>
        </li>
      </ul>
    </div>
  </div>
  <div class="content-2">
    <div class="content2-text">
      <div class="text-cont">
        <p style="font-size: 40px;">CHUYÊN GIA VỀ VẬT LIỆU <br>KHÂU NỐI VẾT THƯƠNG </p>
        <p style="color: #116cbf; font-size: 20px;">KIỆT TÁC CHO MỌI CÔNG TRÌNH GIẢI PHẪU</p>
      </div>
    </div>
    <div class="content2-sreach">
      <div class="sreach-cont">
        <h2 style="color: #fff;">TÌM SẢN PHẨM </h2><br>
        <div class="search">
          <div class="search">
            <i class="bi bi-search" style="width: 40px ; height: 40px; text-align: center; line-height: 40px; background-color: #4183f6;color: #f7fafc;"></i> <input type="text" placeholder="SEARCH YOUR PRODUCT">
             
           </div>
        </div >
        <p style="color: #fff; margin-top: 10px;">Bấm vào ô kết quả bên dưới để tìm sản phẩm tương đương</p>
      </div>
    </div>
  </div>
  <div class="content3">
    <div class="content3-img">
      <img src="{{ asset('img/84.jpg') }}" alt="" class="img-84">
    </div>

    <div class="content3-text">
      <div class="textcont3">
        <p style="font-size: 20px ; color:#1886EB;"> GIỚI THIỆU</p>
        <h3 style="font-size: 34px; color: #fff; margin: 10px 0; font-weight: normal;">CÔNG TY TNHH <br>
          CHỈ PHẪU THUẬT <strong style="color: #1886EB; "> CPT</strong></h3>
        <p style="color: #fff; font-size: 18px; margin: 10px 0;">Hoạt động từ năm 1992, CPT là nhà sản xuất thiết bị y
          tế kỹ thuật cao chuyên dùng cho phẫu thuật ngoại khoa. Sản phẩm chủ lực gồm có chỉ khâu phẫu thuật và vật tư y
          tế tiêu hao điều trị vết thương.
        </p>
        <p style="color: #fff; font-size: 18px; margin: 10px 0;"> Sứ mệnh của chúng tôi là mang đến giải pháp an toàn và
          hiệu quả cho quá trình phẫu thuật chữa lành mọi thương tổn, phục hồi chức năng, tạo hình thẩm mỹ để mang đến
          sức khỏe và chất lượng cuộc sống tốt đẹp hơn.
        </p>
        <p style="color: #fff; font-size: 18px; margin: 10px 0;"> Bằng đội ngũ nhân sự tận tâm yêu nghề, nguyên vật liệu
          cao cấp và công nghệ hiện đại của Đức; chúng tôi cung cấp sản phẩm đạt tiêu chuẩn quốc tế (US-FDA) với nhiều
          tính năng kỹ thuật vượt trội thỏa mãn kỳ vọng khách hàng và yêu cầu luật định.</p>
        <p style="color: #fff; font-size: 18px;">
          <strong style="color: #1886EB;"> HỆ THỐNG QUẢN LÝ CHẤT LƯỢNG:</strong> ISO 13485 | FDA 21 CFR Part 820 (QSR).
        </p>
      </div>
    </div>
  </div>
  <div class="content4">
    <p style="font-size: 40px; font-weight: normal; margin-bottom: 30px; "> SẢN PHẨM </p>
    <hr class="hr-cont">
    <ul class="ul-content4">
      <li class="li-content4"> <strong style="font-weight: bold; color: black;"> CPT có <span class="span-content4">
            1000+ </span> Mã
          hàng đáp ứng hầu hết các loại hình phẫu thuật: <br> ngoại tổng quát, tiêu hóa, sản phụ khoa, chấn thương chỉnh
          hình, <br> tim mạch lồng ngực, nhãn khoa, thẩm mỹ…</li>
      </strong>
      <li class="li-content4"> <strong style="font-weight: bold; color: black;"> Sản phẩm được tin dùng bởi các chuyên
          gia phẫu thuật đầu <br> ngành, mang đến chất
          lượng và trải nghiệm sử dụng tương đương <br> với các nhãn hàng uy tín trên thế giới như <span
            class="span-content4">Ethicon (Johnson & <br> Johnson), B.Braun, Covidien (Medtronic).</span>
        </strong></li>

    </ul>
  </div>
  <div class="content5">
    <div class="menu-content5">
      <ul class="ul-content5">
        @foreach ($menus as $key => $menu)
            @if ($key==0)
           <small></small>
           @else
           <li class="li-content5">
            <h4> <a href="{{ url($menu->slug) }}"> {{ $menu->name }}</a></h4>
          </li>
            @endif
        @endforeach
       
       
      </ul>
    </div>
  </div>
  <div class="content4">
    <p style="font-size: 40px; margin-bottom: 30px; "> NĂNG LỰC </p>
    <hr class="hr-cont">
    <ul class="ul-content4">
      <li class="li-content4" style="color: black;"> Với kinh nghiệm dày dặn, quy mô sản xuất lớn và vị trí giao thương
        thuận tiện; CPT có lợi
        thế cung cấp đầy đủ các loại chỉ phẫu thuật và vật tư y tế tiêu hao một cách nhanh chóng với chất lượng đảm bảo
        và giá cả cạnh tranh nhất trên thị trường. </li>
      <li class="li-content4" style="color: black;"> Đội ngũ nghiên cứu và phát triển (R&D) luôn cập nhật công nghệ mới
        và tiếp thu ý kiến từ
        các nhà chuyên môn trong ngành y tế để cải tiến liên tục chất lượng sản phẩm, thiết lập những chuẩn mực và tính
        năng kỹ thuật mới.</li>
    </ul>
  </div>
  <div class="content6">
    <div class="text-content6">
      <p style="font-size: 40px;">OEM </p><br>
      <p> Với hệ thống phòng sạch và quy trình sản xuất theo tiêu chuẩn quốc tế, Công ty <br>
        TNHH Chỉ Phẫu Thuật CPT cung cấp thành phẩm mang nhãn hiệu riêng cho các hãng <br>
        thiết bị y tế uy tín trên thế giới. Các dịch vụ gia công: </p>
    </div>

  </div>
  <div class="text-backgroud">
    <div class="text-bg-1">
      <p> <i class="bi bi-check-circle-fill" style="color: #fff; font-size: 40px; margin-right: 10px;"></i>GẮN KIM VÀO
        CHỈ PHẪU THUẬT (VI PHẪU, KHÂU MẠCH MÁU, <br> NHÃN KHOA ĐẾN USP 11/0)</p>
    </div>
    <div class="text-bg-2">
      <p><i class="bi bi-check-circle-fill" style="color: #fff; font-size: 40px; "> </i> ĐÓNG GÓI VÀ TIỆT TRÙNG DỤNG CỤ,
        VẬT TƯ Y TẾ BẰNG KHÍ <br> EO (ETHYLENE OXIDE)</p>
    </div>
  </div>

  <div class="content7">
    <div class="text1-cont7"> TÍNH NĂNG VƯỢT TRỘI </div>
    <div class="contsanpham">
        @foreach ($products as $product)
        <div class="text2-cont7">
            <h4>{{  $product->name }}</h4>
            <p style="margin: 20px 0;"> {!! Str::limit( $product->content, 100) !!}</p>
            <div class="xemthem1">
              <a href="">
                <p> XEM THÊM<i class="bi bi-chevron-right" style="float: right; margin-right: 10px;"></i></p>
              </a>
            </div>
          </div>         
        @endforeach
   
    
    </div>
  </div>
@endsection