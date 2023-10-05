@extends('layouts.app')
@section('title','Edit Items')
@section('content')
<div class="col container">
    <div class="row justify">
        <h1 class="text-center mt-3 mt-5 text-bolder">Item Edit</h1>
        {{--{{ route('items.update',$items->id) }}--}}
        <div class="row mt-1 mb-2">
            <div class="col-12 text-start">
                <a href="{{ route('item.index')}}"><button type="button" class="btn btn-primary">CLOSE</button></a> {{--Return TOP VIEW--}}
            </div>
        </div>
        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row mb-3">
                <div class="col-6">
                    <label for="image" class="form-label text-muted ">Image</label>
                    <img src="{{ asset('images/'. $items->image )}}" alt="{{ $items->name}}" class="w-100 img-thumbnail">
                    <input type="file" name="image" id="image" class="form-control" aria-describedby="image-info">
                <div class="form-text" id="image-info">
                    Acceptable formats:jpeg,jpg,png and gif<br>
                    Maximum file size:1048kb
                </div>
                @error('image')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-auto">
                    <div class="col-12">
                        <label for="name" class="form-label fw-bolder">Item Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Item Name" value="{{ old('name',$items->name) }}" autofocus>
                        @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="price" class="form-label">Item Price</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Enter Item Price" value="{{ old('price',$items->price) }}" autofocus>
                        @error('price')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="detail" class="form-label text-muted">Detail</label>
                        <textarea name="detail" id="detail"  rows="5" class="form-control text-start" placeholder="Detail" autofocus>
                            {{ old('detail',$items->detail) }}
                        </textarea>
                        @error('detail')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-6 mt-2">
                <label for="inventry" class="form-label">Inventry </label>
                <input type="text" name="inventry" id="inventry" class="form-control" placeholder="Enter Item Price" value="{{ old('inventry',$items->inventry) }}" autofocus>
                @error('inventry')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label d-block fw-bold mt-2">
                    Category ID
                </label>
                @foreach ($all_categories as $category)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="category[]" id="{{ $category->name }}" value="{{ $category->id }}" class="form-check-input"
                        @if(in_array($category->id, $selectedCategories))
                        checked
                        @endif>
                        <label for="{{ $category->name }}" class="form-check-label">{{ $category->name }}</label>
                    </div>
                @endforeach
                {{-- Error --}}
                @error('category')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"class="btn btn-warning btn-lg px-5">SAVE</button>
        </form>
    </div>
</div>
@endsection



















