@extends('layouts.app')

@section('title','Edit Items')
    
@section('content')

    <link rel="stylesheet" href="/css/item.css">

    <div class="body">
        
    <div class="container">
        <div class="row justify-content-center">

            {{-- to edit item details --}}
            <form action="{{route('item.update', $item->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')


                <h1 class="text-center">EDIT ITEMS</h1>


                <div class="row">
                    {{-- Item card --}}
                    <div class="col-4">
                        <div class="row">
                            <div class="col-10 offset-1 align-items-center">
                                <div class="card card-potision">
                                    <div class="card-body">
                                        <img src="{{$item->image}}"
                                        alt="Item Image"
                                        class="card-img-top mb-1 rounded" style="height: 180px; object-fit: cover;" >   
                                        <div class="upload-box">
    
                                            <input type="file" name="upload_file" id="input_files">
                                            <span>+</span>
                                        </div>
                                    </div>
                                    <div class="card-footer" >
                                        <div class="card-text">
                                            <p class="h2 text-center">ITEM NAME</p>
                                            <p class="h4 text-center">{{$item->name}}</p>
                                            <p class="h5 px-1">PRICE : {{$item->price}} $</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Those inputs edit item information --}}
                    <div class="col-4">
                        <label for="name" class="form-label"></label>
                        <input type="name" id="name" name="name" class="form-control text-center input" placeholder="Change Item Name" value="{{$item->name}}" >

                        <label for="price" class="form-label"></label>
                        <input type="price" step="0.01" name="price" id="price" class="form-control text-center input" placeholder="Change Price" value="{{$item->price}}" >

                        <label for="category" class="form-label"></label>
                        {{-- <select name="category" id="category" class="form-select" >
                            <option value="{{$item->category_id}}">Choose Category</option> --}}

                            @if ($all_categories->isNotEmpty())
                            @foreach ($all_categories as $category)
                            <div class="form-check form-check-inline">
                                @if (in_array($category->id, $selected_categories))
                                    <input type="radio" value="{{$category->id}}" name="category" id="{{$item->category_id}}" class="form-check-input" checked>
                                @else
                                    <input type="radio" value="{{$category->id}}" name="category" id="{{$category->name}}" class="form-check-input">
                                  
                                @endif
                                <label for="{{$category->name}}" class="form-check-line">{{$category->name}}</label> 
                            </div>
                        @endforeach
                        @endif
                        {{-- </select> --}}
                    </div>
                    {{-- some buttons  close, save ,delete --}}
                    <div class="col-4">
                        <div class="row mt-5">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <div class="row mt-1 close-button">
                                    <a href="#" class="close-button text-decoration-none text-center">Close</a>
                                </div>
    
                                <div class="row mt-5 save-button">
                                    <button type="submit"  class="save-button btn btn-lg" >Save</button>
                                </div>


            </form>
        
                                <div class="row mt-5 delete-button">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#delete-item" class="delete-button btn btn-lg">Delete</button>
                                </div>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </div>

                    
                </div>


            {{-- inventory information --}}

            <div class="row align-items-center inventory">
                <div class="col-2">
                    <button class="sort mx-2">Stock All</button>
                </div>
                <div class="col-2">
                    <button class="sort mx-1">Sell Through All</button>
                </div>
                <div class="col-5">
                    <h1 class="inventory-text">INVENTORY</h1>
                </div>
                <div class="col-2">
                    <button class="sort py-auto mx-1">Check All Categories</button>
                </div>
            </div>

            {{-- table --}}

            <div class="row mt-2">
                <table>
                    <thead>
                        <tr>
                            <th>DATE</th>
                            <th>IN</th>
                            <th>OUT</th>
                            <th>ITEM</th>
                            <th>PRICE</th>
                            <th>CATEGORY</th>
                            <th>QTY</th>
                            <th>TRANSACTION ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>xx/xx/2023</td>
                            <td>xx/xx/2021</td>
                            <td>xx/xx/2022</td>
                            <td>xxxxx</td>
                            <td>$xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>xxx</td>
                            <td>No.xxxxxxxxx</td>
                        </tr>
                        <tr>
                            <td colspan="12" class="text-center py-3">Display 10 results in the same way below.<br>Next page after 10 in pagination</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <nav aria-label="Page navigation example" class="nav">
                <ul class="pagination">
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
    
    @include('item.modal.delete')
    @include('item.modal.save')

@endsection


















