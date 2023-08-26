@extends('layouts.app')
@section('title', 'Item List')
@section('content')


<div id="item-list">

  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-sm">
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg></span>
          <input type="text" class="form-control" placeholder="search items" aria-label="search" aria-describedby="basic-addon1">
        </div>
      </div>
      <div class="col-sm">
        <a href="" class="btn btn-ml" style="width: 100%; background-color: #99CCFF; color: #fff;">Add Category</a>
      </div>
      <div class="col-sm">
        <a href="" class="btn btn-ml" style="width: 100%; background-color: #99CCFF; color: #fff;">Add Item</a>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #99CCFF; color: #fff;">
            <option selected>Category</option>
            <option value="1">Category 1</option>
            <option value="2">Category 2</option>
            <option value="3">Category 3</option>
          </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #99CCFF; color: #fff;">
            <option selected>Sort By</option>
            <option value="1">Price High to Low</option>
            <option value="2">Name</option>
            <option value="3">Inventry Few</option>
          </select>
        </div>
      </div>
    </div>
  
    <div class="container mt-5">
      <div class="row row-cols-5">
        <div class="col">
          <div class="card mb-3" >
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/6c/6c172543c194df2d4517d630f4e48234_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/98/9877c97fad4e73196bffc0c8b3645393_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Tomato</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/13/13e548f60f06bc17058f40147f91f191_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Egg</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Daily</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/e3/e3464159c83bcc22ec6a8149706c59a6_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Grape</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Fruit</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <img class="card-img-top" src="https://thumb.photo-ac.com/a3/a348dd5f1cfde4b5e6c19a3bc5959951_w.jpeg" alt="">
            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Mango</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Fruit</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/3f/3f6d6fe260c32306ecf30491dc2a2989_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Melon</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$105.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Fruit</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/62/62f7bf4c83d0a8b546e540843d30ca24_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Peach</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Fruit</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/8a/8a48e5f11b420fc3c4c29f852eff13be_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Pineapple</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Fruit</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/ad/ad5d5a3497f66578cfe84913fbdbeb10_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Passionfruit</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$7.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Fruit</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/68/68b41c9c159f6e8a868227254c258518_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Buleberry</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$5.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Fruit</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/ef/ef75023e123f93a601d66543d1b877a3_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Grapefruit</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Fruit</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/37/37a6ed758b3af38fa6d6e77ffaf7a431_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold">Watermelon</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Inventry : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$10.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Fruit</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
    <div class="row mt-5">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>

@endsection