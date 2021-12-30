<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                Filter
            </div>
            <div class="card-body">

                <form action="{{ url('client/produk/filter2') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label">Nama produk</label>
                        <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                    </div>
                    <br>
                    <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                </form>


            </div>
            <div class="card-body">
                <form action="{{ url('client/produk/filter2') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">harga min</label>
                                <input type="text" class="form-control" name="harga_min"
                                    value="{{$harga_min ?? ""}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">harga max</label>
                                <input type="text" class="form-control" name="harga_max"
                                    value="{{$harga_max ?? ""}}">
                            </div>
                        </div>
                    </div>

                    <br>

                    <button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
                </form>
            </div>
            
        </div>
    </div>
      <div class="row" style="display : flex">
        @foreach($list_produk as $produk)
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{url('public')}}/images/p1.png" alt="">
              <a href="{{url('client/detail', $produk->id)}}" class="add_cart_btn">
                <span>
                  See detail
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
              {{$produk->nama}}
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> {{$produk->harga}}
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="btn_box" style="align-content: center">
      <a href="product" class="view_more-link">
        View More
      </a>
    </div>
  </section>