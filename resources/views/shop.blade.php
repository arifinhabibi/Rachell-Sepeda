@extends('layouts.shop-main')


@section('shop')
<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
               
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">


                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($data as $sepeda)
                    <div class="col-lg-4 col-md-6 col-sm-6">
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
      </div>
  </div>
</section>
<!-- Shop Section End -->
@endsection
