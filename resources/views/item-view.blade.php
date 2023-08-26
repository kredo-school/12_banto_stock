@extends('layouts.app')
@section('title', 'Item View')
@section('content')

<div class="container">
  <div class="row">

    <div class="col-8">
      <div class="row mb-5">
        <div class="col-3">
          <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg></span>
            <input type="text" class="form-control" placeholder="search items" aria-label="search" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="col-3"></div>
        <div class="col-3">
          <div class="form-group">
            <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #99CCFF; color: #fff;">
              <option selected>Category</option>
              <option value="1">Category 1</option>
              <option value="2">Category 2</option>
              <option value="3">Category 3</option>
            </select>
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #99CCFF; color: #fff;">
              <option selected>Sort By</option>
              <option value="1">Price High to Low</option>
              <option value="2">Name</option>
              <option value="3">Stock Few</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row row-cols-4">
        
        
        <div class="col">
          <div class="card mb-3" style="overflow: hidden">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/98/9877c97fad4e73196bffc0c8b3645393_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body" style="background-color: #fff; padding-top: 0;">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="col">
          <div class="card mb-3" style="overflow: hidden">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/e3/e3464159c83bcc22ec6a8149706c59a6_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body" style="background-color: #fff; padding-top: 0;">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="overflow: hidden">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/6c/6c172543c194df2d4517d630f4e48234_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body" style="background-color: #fff; padding-top: 0;">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="overflow: hidden">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/98/9877c97fad4e73196bffc0c8b3645393_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body" style="background-color: #fff; padding-top: 0;">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="overflow: hidden">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/13/13e548f60f06bc17058f40147f91f191_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body" style="background-color: #fff; padding-top: 0;">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="overflow: hidden">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/e3/e3464159c83bcc22ec6a8149706c59a6_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body" style="background-color: #fff; padding-top: 0;">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="overflow: hidden">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/6c/6c172543c194df2d4517d630f4e48234_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body" style="background-color: #fff; padding-top: 0;">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="overflow: hidden">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/3f/3f6d6fe260c32306ecf30491dc2a2989_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body" style="background-color: #fff; padding-top: 0;">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="overflow: hidden">
            <div class="card-img-top" style="background-image: url('https://thumb.photo-ac.com/6c/6c172543c194df2d4517d630f4e48234_w.jpeg'); height: 130px; background-size: cover; background-position: center center;"></div>
            <div class="card-body" style="background-color: #fff; padding-top: 0;">
              <p class="card-text text-center fs-4 fw-bold">Lettuce</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$15.00</div>
                <div class="col-12 fw-bold">Category : <span class="fw-normal">Vegitable</span></div>
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


    <div class="col-4 rounded" style="background-color: #99CCFF">
      <p class="fs-1 fw-bold text-center" style="padding-top: 20px">ORDER LIST</p>
      <p class="fs-5 text-end">Order ID : 123456</p>

      <div class="order-item-area mb-5" style="">
        <div class="order-item rounded px-3 py-2 mb-3" style="background-color: #F2F2F2">
          <p class="item-name fs-4 fw-bold mb-1">Peach</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <p class="fs-5 me-3 mb-0">QTY</p>
              <div class="form-group">
                <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #fff;">
                  <option selected>4</option>
                  <option value="1">2</option>
                  <option value="2">3</option>
                  <option value="3">4</option>
                </select>
              </div>
            </div>

            <p class="item-ttl fs-3 fw-bold mb-0">$10.00</p>
          </div>
        </div>
        <div class="order-item rounded px-3 py-2 mb-3" style="background-color: #F2F2F2">
          <p class="item-name fs-4 fw-bold mb-1">Apple</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <p class="fs-5 me-3 mb-0">QTY</p>
              <div class="form-group">
                <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #fff;">
                  <option selected>1</option>
                  <option value="1">2</option>
                  <option value="2">3</option>
                  <option value="3">4</option>
                </select>
              </div>
            </div>

            <p class="item-ttl fs-3 fw-bold mb-0">$20.00</p>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-between fs-4">
        <p class="">SUBTOTAL</p>
        <p class="">$10.00</p>
      </div>
      <div class="d-flex justify-content-between fs-4">
        <p class="">SERVICE CHARGE</p>
        <p class="">10.0%</p>
      </div>
      <div class="d-flex justify-content-between fw-bold fs-3">
        <p class="">TOTAL</p>
        <p class="">$37.00</p>
      </div>
      <div class="d-flex justify-content-between">
        <button class="btn btn-primary btn-lg fw-bold fs-3" style="">SEND ORDER</button>
        <button class="btn btn-primary btn-lg btn-light fw-bold fs-3" style="">CANCEL</button>
      </div>
    </div>
  </div>
  </div>

@endsection