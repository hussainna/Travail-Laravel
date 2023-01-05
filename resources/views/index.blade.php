@extends('website.master')

@section('content')


      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">{{__('words.heroTitle')}}</h2>

          <p class="hero-text">
            {{__('words.heroDescription')}}
          </p>

          <div class="btn-group">
            <a href='/travail' class="btn btn-primary">Travail</a>

            <a href='/sender' class="btn btn-secondary">Sender Now</a>
          </div>

        </div>
      </section>





    

      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">


          <h2 class="h2 section-title">{{__('words.popular')}}</h2>

          <p class="section-text">
            {{__('words.Popular Description')}}
          </p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="assets/images/popular-1.jpg" alt="San miguel, italy" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Italy</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">San miguel</a>
                  </h3>

                  <p class="card-text">
                    Fusce hic augue velit wisi ips quibusdam pariatur, iusto.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="assets/images/popular-2.jpg" alt="Burj khalifa, dubai" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Dubai</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Burj khalifa</a>
                  </h3>

                  <p class="card-text">
                    Fusce hic augue velit wisi ips quibusdam pariatur, iusto.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="assets/images/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Japan</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Kyoto temple</a>
                  </h3>

                  <p class="card-text">
                    Fusce hic augue velit wisi ips quibusdam pariatur, iusto.
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary">More destintion</button>

        </div>
      </section>







      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">{{__('words.photo title')}}</h2>

          <p class="section-text">
            {{__('words.photo description')}}
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="assets/images/gallery-1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="assets/images/gallery-2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="assets/images/gallery-3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="assets/images/gallery-4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="assets/images/gallery-5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">{{__('words.ready')}}</h2>

            <p class="section-text">
              {{__('words.ready description')}}
            </p>
          </div>

          <button class="btn btn-secondary">Contact Us !</button>

        </div>
      </section>




@endsection