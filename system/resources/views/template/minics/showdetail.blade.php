@extends('template.induk')

@section('content')

<section class="about_section">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-8 ml-1">
          <div class="col-md-8 px-6">
            <div class="img-box">
              <img src="{{url('public')}}/images/about-img.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="detail-box pr-md-4">
          <div class="heading_container">
            <h2>
              {{$produk->nama}}
            </h2>
            <h3>
              Rp. {{number_format($produk->harga)}}  
            </h3>
          </div>
          <p>
              {!! nl2br($produk->deskripsi)!!}
          </p>
          <h4>Stok : {{$produk->stok}}</h4>  
          <h4>Seller : <a href="{{url('client/seller')}}">{{$produk->seller->nama}}</a></h4>         
        </div>
      </div>
    </div>
  </section>

@endsection('content')  