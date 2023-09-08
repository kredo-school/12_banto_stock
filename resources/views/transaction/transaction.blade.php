@extends('layouts.app')
@section('title', 'Transaction')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">


<div class="container">
    <div class="row auto">
        <div class="col-auto">
          <div class="col-souto justify-content-between">
            <form action="" method="get">
                <div class="input-group mb-3 ">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" navbar-toggler on rigth>
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                </div>
            </form>
          </div>
            {{-- Sorting button --}}
            <div class="col-souto justify-content-between">
              <form action="" method="get">
                  <div class="input-group mb-3 ">
                    <button type="submit" class="btn btn-primary">
                      <i class="fi fi-sr-sort-amount-down-alt"></i>SOTE BY
                    </button>
                  </div>
              </form>
            </div>


        </div>
    </div>

    <div class="row">
        <table class="table table-hover align-middle border">
            <thead class="small">
                <tr>
                    <th>USER ID</th>
                    <th>TOTAL</th>
                    <th>STATUS</th>
                    <th>BRANCH ID</th>
                    <th>CART ID</th>
                    <th>DATE</th>
                    <th>PAID AMOUNT</th>
                    <th>DETAIL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>5</td>
                    <td>24</td>
                    <td>ongoing</td>
                    <td>8</td>
                    <td>4</td>
                    <td>2023/08/29</td>
                    <td>200</td>
                    <td>
                        <button type="submit" class="btn btn-primary">
                            <i class="fi fi-sr-rectangle-list"></i> 2 Items
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>24</td>
                    <td>ongoing</td>
                    <td>8</td>
                    <td>4</td>
                    <td>2023/08/29</td>
                    <td>200</td>
                    <td>
                        <button type="submit" class="btn btn-primary">
                            <i class="fi fi-sr-rectangle-list"></i> 2 Items
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>24</td>
                    <td>ongoing</td>
                    <td>8</td>
                    <td>4</td>
                    <td>2023/08/29</td>
                    <td>200</td>
                    <td>
                        <button type="submit" class="btn btn-primary">
                            <i class="fi fi-sr-rectangle-list"></i> 2 Items
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>24</td>
                    <td>ongoing</td>
                    <td>8</td>
                    <td>4</td>
                    <td>2023/08/29</td>
                    <td>200</td>
                    <td>
                        <button type="submit" class="btn btn-primary">
                            <i class="fi fi-sr-rectangle-list"></i> 2 Items
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>24</td>
                    <td>ongoing</td>
                    <td>8</td>
                    <td>4</td>
                    <td>2023/08/29</td>
                    <td>200</td>
                    <td>
                        <button type="submit" class="btn btn-primary">
                            <i class="fi fi-sr-rectangle-list"></i> 2 Items
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>24</td>
                    <td>ongoing</td>
                    <td>8</td>
                    <td>4</td>
                    <td>2023/08/29</td>
                    <td>200</td>
                    <td>
                        <button type="submit" class="btn btn-primary">
                            <i class="fi fi-sr-rectangle-list"></i> 2 Items
                        </button>
                    </td>
                </tr>

          
            </tbody>
        </table>
    </div>





  <script>
  $(document).ready(function () {
      
      var tableData = [
          { userId: 5, total: 24, status: 'ongoing', branchId: 8, cartId: 4, date: '2023/08/29', paidAmount: 200 },
          
      ];

      
      var dataTable = $('#dataTable').DataTable({
          data: tableData,
          columns: [
              { data: 'userId' },
              { data: 'total' },
              { data: 'status' },
              { data: 'branchId' },
              { data: 'cartId' },
              { data: 'date' },
              { data: 'paidAmount' }
          ]
      });

      $('#sortButton').click(function () {
          var sortOrder = dataTable.column('userId:name').order()[0][1];
          sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';
          dataTable.column('userId:name').order(sortOrder).draw();
      });
  });
  </script>

@endsection