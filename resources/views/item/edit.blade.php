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

        </div>
    </div>
    </div>
    @include('item.modal.delete')
    @include('item.modal.save')
@endsection
19:53
@extends('layouts.app')
@section('title', 'Item index')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <h1 class="text-center fw-bolder">Item Index</h1>
        </div>
    </div>
    <div class="row mt-3">
        @forelse ($all_items as $item)
        <div class="col-md-3 mt-3">
            <div class="card h-100 rounded">
                <a href="{{ route('item.edit', $item->id) }}">
                    <img src="{{$item->image}}" alt="{{ $item->image }}" class="card-img-top rounded"
                        style="height: 200px; object-fit: cover;">
                </a>
                <div class="card-body d-flex flex-column">
                    <h5 class="mt-1 flex-grow-1">Name: {{ $item->name }}</h5>
                    <div class="text-primary">Price: $ {{ $item->price }}</div>
                    <div class="text-primary">Inventory: {{ $item->inventory }}</div>
                    <div class="text-dark flex-grow-1">Detail: {{ $item->detail }}</div>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <h2 class="text-muted text-center">No stock yet</h2>
            <p class="text-center">
                <a href="{{ route('item.create') }}" class="text-decoration-none">Create a new order item</a>
            </p>
        </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $all_items->links() }}
    </div>
</div>
@endsection