@extends('layouts.main')

@section('title')
  <title>Rachell Sepeda | Beranda</title>
@endsection

@section('utama')
<!-- Hero Section Begin -->
<section class="hero">
  <div class="hero__slider owl-carousel">
    <div class="hero__items set-bg" data-setbg="img/hero/hero-4.png">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-7 col-md-8">
            <div class="hero__text">
              <h6>Selamat datang</h6>
              <h2>RACHELL SEPEDA</h2>
              <p>Selamat Berbelanja di Toko Rachel Sepeda, Kami menyediakan sepeda dengan brand ternama.</p>
              <a href="/shop" class="primary-btn" style="border-radius: 40px;">Belanja Sekarang <span class="arrow_right"></span></a>
              <div class="hero__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hero__items set-bg" data-setbg="img/hero/hero-5.png">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-7 col-md-8">
            <div class="hero__text">
              <h6>Selamat datang</h6>
              <h2>Temukan sepeda sesuai dengan keinginan anda</h2>
              <p>Harga miring, kualitas terjamin, enggak bikin pusing</p>
              <a href="/shop" class="primary-btn" style="border-radius: 40px;">Belanja Sekarang <span class="arrow_right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="filter__controls" style="padding-top: 50px">
          <li class="active" data-filter="*">Penjualan Terbanyak</li>
          <li data-filter=".new-arrivals">Baru Datang</li>
          <li data-filter=".hot-sales">Terlaris</li>
        </ul>
      </div>
    </div>
    <div class="row product__filter">
      @foreach($data as $sepeda)
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix {{ $sepeda->kondisi }}">
          <div class="product__item">
              <div class="product__item__pic set-bg" data-setbg="img/sepeda/{{ $sepeda->foto_sepeda }}">
              <span class="label">{{ $sepeda->promo }}</span>
            </div>
            <div class="product__item__text">
              <h6>{{ $sepeda->nama_sepeda }}</h6>
              <a href="/shop/detail/{{ $sepeda->id }}" class="add-cart">Detail</a>
              <h5>Rp. {{ $sepeda->harga_sepeda }}</h5>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Product Section End -->

<!---diskon--->
<!-- Categories Section Begin -->
<section class="categories spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="categories__text">
          <h2>
            Sepeda Olahraga <br />
            <span>Dewasa</span> <br />
           Nyaman
          </h2>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="categories__hot__deal">
          <img src="img/product-sale.png" alt="" />
          <div class="hot__deal__sticker">
            <span>Dijual</span>
            <h5>Rp.1500k</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1">
        <div class="categories__deal__countdown">
          <span>Deal Minggu Ini</span>
          <div class="categories__deal__countdown__timer" id="countdown">
            <div class="cd-item">
              <span>3</span>
              <p>Hari</p>
            </div>
            <div class="cd-item">
              <span>1</span>
              <p>Jam</p>
            </div>
            <div class="cd-item">
              <span>50</span>
              <p>Menit</p>
            </div>
            <div class="cd-item">
              <span>18</span>
              <p>Detik</p>
            </div>
          </div>
          <a href="#" class="primary-btn" style="border-radius: 40px;">Beli Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Categories Section End -->

@endsection
