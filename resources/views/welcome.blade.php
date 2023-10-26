@extends('layouts.user')

@section('content')
        <h2>Arnoriel Repacks.</h2>
        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong></p>
        <center><img src="{{asset('img/diskon.jpg')}}" style="width: 400px;"></center>
        <br>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/resident4.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/ride.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/nfs.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      <br>
      <h2>Recommended Games</h2>
      <br>
      <div class="row">
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
                <a href="/spidermanmm"><img src="{{asset('img/spidermanmm.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Marvel's Spiderman: Miles Morales</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/spiderman"><img src="{{asset('img/spiderman.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Marvel's Spiderman Remastered</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/payday"><img src="{{asset('img/payday.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Payday 3: Day One Edition</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/re4"><img src="{{asset('img/re4cover.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Resident Evil 4 Remake: Deluxe Edition</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/startrek"><img src="{{asset('img/startrek.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Startrek: Infinite</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/stellaris"><img src="{{asset('img/stellaris.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Stellaris</p>
                </div>
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
                <a href="/spidermanmm"><img src="{{asset('img/spidermanmm.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Marvel's Spiderman: Miles Morales</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/spiderman"><img src="{{asset('img/spiderman.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Marvel's Spiderman Remastered</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/payday"><img src="{{asset('img/payday.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Payday 3: Day One Edition</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/re4"><img src="{{asset('img/re4cover.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Resident Evil 4 Remake: Deluxe Edition</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/startrek"><img src="{{asset('img/startrek.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Startrek: Infinite</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/stellaris"><img src="{{asset('img/stellaris.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Stellaris</p>
                </div>
              </div>
        </div>
      </div>
      <br>
      <center><img src="{{asset('img/diskon.jpg')}}" style="width: 400px;"></center>
      <br>
      <div class="row">
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
                <a href="/spidermanmm"><img src="{{asset('img/spidermanmm.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Marvel's Spiderman: Miles Morales</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/spiderman"><img src="{{asset('img/spiderman.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Marvel's Spiderman Remastered</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/payday"><img src="{{asset('img/payday.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Payday 3: Day One Edition</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/re4"><img src="{{asset('img/re4cover.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Resident Evil 4 Remake: Deluxe Edition</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/startrek"><img src="{{asset('img/startrek.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Startrek: Infinite</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/stellaris"><img src="{{asset('img/stellaris.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Stellaris</p>
                </div>
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
                <a href="/spidermanmm"><img src="{{asset('img/spidermanmm.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Marvel's Spiderman: Miles Morales</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/spiderman"><img src="{{asset('img/spiderman.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Marvel's Spiderman Remastered</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/payday"><img src="{{asset('img/payday.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Payday 3: Day One Edition</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/re4"><img src="{{asset('img/re4cover.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Resident Evil 4 Remake: Deluxe Edition</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/startrek"><img src="{{asset('img/startrek.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Startrek: Infinite</p>
                </div>
              </div>
        </div>
        <div class="col col-sm-2">
            <div class="card" style="width: 11rem;">
               <a href="/stellaris"><img src="{{asset('img/stellaris.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <p class="card-text">Stellaris</p>
                </div>
              </div>
        </div>
      </div>
      </div>
      <br>
      <nav aria-label="...">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
      <br>
@endsection 