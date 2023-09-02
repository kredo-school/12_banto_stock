@extends('layouts.app')
@section('title', 'Item List')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/items.css')  }}" >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

<div id="item-list" id="item-list">

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
        <a href="" class="btn btn-ml fw-bold" style="width: 100%; background-color: #99CCFF; color: #fff;">Add Category</a>
      </div>
      <div class="col-sm">
        <a href="" class="btn btn-ml fw-bold" style="width: 100%; background-color: #99CCFF; color: #fff;">Add Item</a>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #99CCFF; color: #fff;">
            <option selected>Category</option>
            <option value="meatSeafood">Meat & Seafood</option>
              <option value="bakery">Bakery & Bread</option>
              <option value="dairy">Dairy & Eggs</option>
              <option value="snaks">Snacks</option>
              <option value="drinks">Coffee & Tea</option>
              <option value="frozen">Frozen</option>
          </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #99CCFF; color: #fff;">
            <option selected>Sort By</option>
            <option value="priceHtL">Price High to Low</option>
              <option value="name">Name</option>
              <option value="stock">Stock Few</option>
          </select>
        </div>
      </div>
    </div>
  
    <div class="container mt-5 item-container">
      <div class="row row-cols-5">
        <div class="col">
          <div class="card mb-3" >
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/beef.png") }}')"></div>
            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Beef</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$10.74</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Meat & Seafood</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/bread.png") }}');"></div>
            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Bread</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$1.53</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Bakery & Bread</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/cheese.png") }}');"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Cheese</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$2.33</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Dairy & Eggs</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/milk.png") }}');"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Milk</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$2.00</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Dairy & Eggs</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/egg.png") }}');"></div>
            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Eggs</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$3.00</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Dairy & Eggs</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/Cake.png") }}');"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Cakes</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$5.98</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Bakery & Bread</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/cookie.png") }}');"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Cookies</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$4.58</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Snacks</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/potatochips.png") }}');"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Chips</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$4.98</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Snacks</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/coffeebean.png") }}');"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Coffee </p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$18.98</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Coffee & Tea</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/tea.png") }}');"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Tea</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$3.78</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Coffee & Tea</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/salmon.png") }}');"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Fish</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$11.54</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Meat & Seafood</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/pie.png") }}');"></div>

            <div class="card-body">
              <p class="card-text text-center fs-4 fw-bold title">Frozen Meals</p>
              <div class="row">
                <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">5</span></div>
                <div class="col-6 text-end ps-0 fs-5">$3.48</div>
                <div class="col-12 fw-bold category">Category : <span class="fw-normal">Frozen</span></div>
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