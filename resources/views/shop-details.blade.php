@extends('layouts.detail-main')


@section('detail-main')
<!-- Shop Details Section Begin -->
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">       
            <div class="row">
                <div class="col-md-6 mt-4">
                    <div class="card" style="min-height: 450px">
                        <div class="card-body">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img class="product__item__pic set-bg mb-4" src="/img/sepeda/{{ $data->foto_sepeda }}" alt="">
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                
                                <a href="
                                https://api.whatsapp.com/send/?phone=628977500374" class="primary-btn">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                        <div class="card" style="min-height: 450px">
                            <div class="card-body">
                                <div class="product__details__text">
                                    <h4 class="mt-4">{{ $data->nama_sepeda }}</h4>
                                    <h5>Rp. {{ $data->harga_sepeda }}</h5>
                                    <h5 class="mt-4"><strong>Kategori</strong></h5>
                                    <p>{{ $data->kategori }}</p>
                                    <h5 class="mt-4"><strong>deskripsi</strong></h5>
                                    <p>{{ $data->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>







    <div class="product__details__content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                role="tab">Spesifikasi</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                <div class="product__details__tab__content">
                                    <div class="product__details__tab__content__item">
                                        <h5>Spesifikasi</h5>
                                       {!! $data->spesifikasi !!}
                                    </div>
                                </div>
                            </div>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Details Section End -->
@endsection
