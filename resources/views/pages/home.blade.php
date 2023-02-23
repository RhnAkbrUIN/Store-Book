@extends('layouts.app')

@section('title')
    HexaWorks - Home
@endsection

@section('content')
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/images/carousel.png" alt="Carousel Image" class="d-block w-100" style="border-radius: 15px">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/carousel.png" alt="Carousel Image" class="d-block w-100" style="border-radius: 15px">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/carousel.png" alt="Carousel Image" class="d-block w-100" style="border-radius: 20px">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
            </div>
            <div class="row">
              @php
                $incrementCategory = 0
              @endphp
              @forelse ($categories as $category)
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+= 100 }}">
                <a href="{{ route('categories-detail', $category->slug ) }}" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="{{ Storage::url($category->photo) }}" alt="" class="w-100">
                  </div>
                  <p class="categories-text">
                    {{ $category->name }}
                  </p>
                </a>
            </div>
              @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                  No Categories Found
                </div>
              @endforelse
          </div>
     
      </section>

      <section class="store-new-products">
        <div class="container">
          <div class="row">
            @php
                $incrementProduct = 0
              @endphp
            <div class="col-12" data-aos="fade-up">
              <h5>New Products</h5>
            </div>
          </div>
          <div class="row">
            @forelse ($products as $product)
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+= 100 }}">
              <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                <div class="products-thumbnails">
                  <div class="products-image" 
                  style="
                  @if($product->galleries->count())
                    background-image: url('{{ Storage::url($product->galleries->first()->photos) }}');
                  @else
                    background-color: #eee;
                  @endif
                  ">
                  </div>
                </div>
                <div class="products-text">
                  {{ $product->name }}
                </div>
                <div class="products-price">
                  Rp.{{ $product->price }}
                </div>
              </a>
            </div>
            @empty
              <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                  No Product Found
                </div>
            @endforelse
        </div>
      </div>
      </section>
      <section class="break-products"> 
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Our Members</h5>
            </div>
        </div>
        </div>
      </section>
      <section class="profile">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="profile-members" >
                <div class="profile-thumbnails">
                    <img src="/images/profile-thumbnails-0.jpg" alt="">
                </div>
                <div class="profile-details">
                  <div class="profile-name">
                    <h2>M. Raihan Akbar<br><Span>Fighter</Span></h2>
                    <div class="profile-quotes">
                      <h3>"Jangan berhenti untuk melangkah, teruslah berjalan. Apalagi saat melintas sendirian di kuburan pada malam hari"</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="profile-members" >
                <div class="profile-thumbnails">
                    <img src="/images/profile-thumbnails-2.jpg" alt="">
                </div>
                <div class="profile-details">
                  <div class="profile-name">
                    <h2>Rio Tegar Syahputra<br><Span>Tank</Span></h2>
                    <div class="profile-quotes">
                      <h3>"Jangan berhenti untuk melangkah, teruslah berjalan. Apalagi saat melintas sendirian di kuburan pada malam hari"</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="profile-members" >
                <div class="profile-thumbnails">
                    <img src="/images/profile-thumbnails-3.jpg" alt="">
                </div>
                <div class="profile-details">
                  <div class="profile-name">
                    <h2>M. Fikri Fahreza<br><Span>Mage</Span></h2>
                    <div class="profile-quotes">
                      <h3>"Jangan berhenti untuk melangkah, teruslah berjalan. Apalagi saat melintas sendirian di kuburan pada malam hari"</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
              <div class="profile-members" >
                <div class="profile-thumbnails">
                    <img src="/images/profile-thumbnails-4.jpg" alt="">
                </div>
                <div class="profile-details">
                  <div class="profile-name">
                    <h2>Rizqi Laeli<br><Span>Support</Span></h2>
                    <div class="profile-quotes">
                      <h3>"Jangan berhenti untuk melangkah, teruslah berjalan. Apalagi saat melintas sendirian di kuburan pada malam hari"</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="break-profile"> 
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>About Us</h5>
            </div>
        </div>
        </div>
      </section>
      <section class="company">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="company-thumbnails" data-aos="fade-up" data-aos-delay="100">
                <img src="/images/company-4.png" alt="">
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="company-details" data-aos="fade-up" data-aos-delay="200">
                <p>E-Commerce merupakan suatu konsep baru yang biasa digambarkan sebagai proses jual beli barang atau jasa pada Word Wide Web Internet atau proses jual beli atau pertukaran produk, jasa, dan informasi melalui jaringan informasi termasuk internet.</p>

                <p> E-commerce merupakan kegiatan bisnis yang dijalankan secara elektronik melalui suatu jaringan internet atau kegiatan jual beli barang atau jasa melalui jalur komunikasi digital. (Adi Nugroho, 2006:1). </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="company-details" data-aos="fade-up" data-aos-delay="200">
                <p>Dengan berkembangnya kemajuan teknologi yang sangat pesat hingga berhasil membuat sebagian masyarakat selalu menggunakan berbagai hal secara digital baik itu untuk kebutuhan pribadi maupun pokok. Masyarakat sering membeli ataupun menjual barang secara digital melalui E-Commerce karena sudah mempunyai konsumen yang mendunia.</p>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="company-thumbnails" data-aos="fade-up" data-aos-delay="100">
                <img src="/images/company-3jpg.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-12 col-lg-6">
              <div class="company-thumbnails" data-aos="fade-up" data-aos-delay="100">
                <img src="/images/company-0.jpg" alt="">
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="company-details" data-aos="fade-up" data-aos-delay="200">
                <p>Di era serba digital seperti sekarang ini, kita semakin sulit menemukan toko buku. Oleh karena itu kami hadir sebagai toko buku digital untuk mempermudah konsumen dalam mendapatkan buku secara online tanpa harus mencari secara langsung.</p>

                <p> Dengan adanya toko online buku ini, kami ingin lebih menspesifikasikan barang yang ingin di jual ataupun di beli yaitu buku saja. Sehingga konsumen dapat mencari tahu secara terperinci dan tidak mudah teralihkan dengan produk selain buku.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection