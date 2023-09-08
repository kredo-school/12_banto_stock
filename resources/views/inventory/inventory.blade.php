@extends('layouts.app')
@section('title', 'Inventory')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">


<div class="container">
    <!-- inventory part -->
    <h1>Inventory Summary</h1>
    <div class="top-content">

        <div class="row m-auto">
            <div class="col-3">
                <!-- Total Products Card -->
                <div class="card-total-products text-white">
                    <div class="card-body">
                        <h3 class="card-title"><i class="fi fi-sr-box"></i>Total Products</h3>
                        <p class="card-text h2">12</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <!-- Low Stock Products Card -->
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h3 class="card-title"><i class="fi fi-sr-box-open-full"></i>Low Stock Products</h3>
                        <p class="card-text h2">10</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <!-- Out Stock Products Card -->
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h3 class="card-title"><i class="fi fi-sr-box-open"></i>Out of Stock Products</h3>
                        <p class="card-text h2">4</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <!-- Zero Stock Products Card -->
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h3 class="card-title"><i class="fi fi-sr-cross-circle"></i>Zero Stock Products</h3>
                        <p class="card-text h2">4</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <!-- Most Stock Products Card -->
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h3 class="card-title"><i class="fi fi-sr-boxes"></i>Most Stock Products</h3>
                        <p class="card-text h2">4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-5">
    <div class="bottom-content mt-5">
        <!-- recent part -->
        <h1>Recent purchase products</h1>
        <div class="col-3 justify-content-between data-bs-placement='right'">
          <form action="" method="get">
              <div class="input-group mb-3 ">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" navbar-toggler on rigth>
                      <span class="input-group-text">
                          <i class="fa fa-search"></i>
                      </span>
              </div>
          </form>
        </div>

        <div class="row">
            <table class="table table-hover align-middle bg-white border text-secondary">
                <thead class="small table-primary text-secondary">
                    <tr>
                        <th>Purchase Date</th>
                        <th>Products Name</th>
                        <th>Order Totale</th>
                        <th>Stock List</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023/08/29</td>
                        <td>AAAAA</td>
                        <td>45,000</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <td>2023/08/29</td>
                        <td>AAAAA</td>
                        <td>45,000</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <td>2023/08/29</td>
                        <td>AAAAA</td>
                        <td>45,000</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <td>2023/08/29</td>
                        <td>AAAAA</td>
                        <td>45,000</td>
                        <td>450</td>
                    </tr>
                </tbody>
            </table>
        </div>
           
     <div class="container">
      <p class="table-footer text-start">Showing data 1 to 10 of 100k entries</p>
      {{-- page nav start --}}
        <nav aria-label="Page navigation" class="pagination-container float-right">
          <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                </a>
            </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                </a>
              </li>
        </nav>
      {{-- page nav end --}}
     </div>
    </div>
    </div>
</div>
@endsection