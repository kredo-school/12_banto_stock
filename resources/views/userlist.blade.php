<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    {{-- <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"></script> --}}
</head>

<body>
    <div class="container mx-auto mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="font-poppins-bold">Hello Administration
                    {{-- put name after Hello --}}
                    <i class="fa-solid fa-hands fa-sm"></i>,
                </h3>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="card" style="max-width: 360px; height:160px">
                <div class="row">
                    <div class="col-md-4">
                        <img src={{ url('/storage/images/transaction.png') }} class="mt-3 img-fluid rounded-start"
                            alt="transaction">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Total Transaction</h5>
                            <p class="card-text">5,423</p>
                            <p class="card-text"><small class="text-muted">↑16% this month</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="max-width: 360px; height:160px">
                <div class="row">
                    <div class="col-md-4">
                        <img src={{ url('/storage/images/user.png') }} class="mt-3 img-fluid rounded-start"
                            alt="user">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Active Workers Now</h5>
                            <p class="card-text">189</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="max-width: 500px; height:160px">
                <div class="row">
                    <div class="col-lg-4">
                        <canvas id="pie-chart" height="200" width="400"></canvas>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Active workers at Branch</h5>
                            <span></span>
                            <p class="card-text">A XXX</p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- test --}}
        </div>
    </div>

    </div>
    </div>
    </div>

    </div>
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-3">
                <h3>All Cashers</h3>
            </div>
            <div class="col-3">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </form>
            </div>
            <table class="table table-hover">
                <thead class="table-header">
                    <tr>
                        <th scope="col">Name<span><i class="fa-solid fa-pen-to-square"></i></span></i></th>
                        <th scope="col">Employee Number</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Adam</th>
                        <td>123457666</td>
                        <td>Osaka</td>
                        <td><a href="#" class="btn btn-primary btn-sm disabled" tabindex="-1" role="button"
                                aria-disabled="true">Active</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Jacob</th>
                        <td>12344555</td>
                        <td>Osaka</td>
                        <td><a href="#" class="btn btn-primary btn-sm disabled" tabindex="-1" role="button"
                                aria-disabled="true">Active</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Jacob</th>
                        <td>12344555</td>
                        <td>Osaka</td>
                        <td><a href="#" class="btn btn-secondary btn-sm disabled" tabindex="1" role="button"
                                aria-disabled="false">InActive</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Adam</th>
                        <td>123457666</td>
                        <td>Osaka</td>
                        <td><a href="#" class="btn btn-primary btn-sm disabled" tabindex="-1" role="button"
                                aria-disabled="true">Active</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Jacob</th>
                        <td>12344555</td>
                        <td>Osaka</td>
                        <td><a href="#" class="btn btn-primary btn-sm disabled" tabindex="-1" role="button"
                                aria-disabled="true">Active</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Jacob</th>
                        <td>12344555</td>
                        <td>Osaka</td>
                        <td><a href="#" class="btn btn-secondary btn-sm disabled" tabindex="1"
                                role="button" aria-disabled="false">InActive</a></td>
                    </tr>
                </tbody>
            </table>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ mix('js/userlist.js') }}"></script>
</body>

</html>
