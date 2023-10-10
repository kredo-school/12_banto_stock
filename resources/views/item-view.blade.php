@extends('layouts.app')
@section('title', 'Item View')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/items.css')  }}" >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">


<!-- <script src="{{ asset('js/components/pizza.js')}}"></script> -->

<div class="container" id="item-view">
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
        <div class="col-3 ml-auto">
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
        <div class="col-3">
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
            @foreach($items as $item)
                <div class="col" id="item-{{$item->id}}">
                    <div class="card mb-3">
                        <div class="card-img-top" style="background-image: url('{{ asset("/storage/images/{$item->image}") }}')"></div>
                        <div class="card-body">
                            <p class="card-text text-center fs-4 fw-bold title">{{ $item->name }}</p>
                            <div class="row">
                              <div class="col-6 pe-0 fw-bold">Stock : <span class="fw-normal">{{ $item->inventory }}</span></div>
                              <div class="col-6 text-end ps-0 fs-5">{{ $item->price }}</div>
                              <div class="col-12 fw-bold category">Category : <span class="fw-normal">{{ $item->category_id}}</span></div>
                              <div class="col-12 mt-2">
                                <a href="{{route('item-view.index', ['items' => $items, 'id' => $items->id])}}" class="btn btn add-to-order" style="background-color: #99CCFF; color: #fff;"
                                  data-id="{{ $item->id }}" 
                                  data-name="{{ $item->name }}" 
                                  data-price="{{ $item->price }}"
                                  data-stock="{{ $item->inventory }}"> <!-- こちらを追加 -->
                                    Add to Order
                                </a>

                              </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="row mt-5">
          <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                  <li class="page-item">
                      <a class="page-link" href="{{ $items->previousPageUrl() }}" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                      </a>
                  </li>
                  @for ($page = 1; $page <= $items->lastPage(); $page++)
                      <li class="page-item {{ $page == $items->currentPage() ? 'active' : '' }}">
                          <a class="page-link" href="{{ $items->url($page) }}">{{ $page }}</a>
                      </li>
                  @endfor
                  <li class="page-item">
                      <a class="page-link" href="{{ $items->nextPageUrl() }}" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                      </a>
                  </li>
              </ul>
          </nav>
        </div>
        
      </div>

    </div>


    <div class="col-4 rounded right-side" style="background-color: #99CCFF">
      <p class="fs-1 fw-bold text-center" style="padding-top: 20px">ORDER LIST</p>
      <p class="fs-5 text-end">Order ID : 123456</p>

      <div class="order-item-area mb-5" style="">
        <!-- オーダーアイテムを追加するためのフォーム -->
        <form id="order-form">
          @foreach ($items as $item)
              <div class="order-item rounded px-3 py-2 mb-3" style="background-color: #F2F2F2">
                  <p class="item-name fs-4 fw-bold mb-1">{{ $item->name }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                          <p class="fs-5 me-3 mb-0">QTY</p>
                          <div class="form-group">
                              <select class="form-control text-center fw-bold order-quantity" style="background-color: #fff;">
                                  @for ($i = 1; $i <= 10; $i++)
                                      <option value="{{ $i }}">{{ $i }}</option>
                                  @endfor
                              </select>
                          </div>
                      </div>

                      <p class="item-ttl fs-3 fw-bold item-price">{{ $item->price }}</p>
                  </div>
              </div>
          @endforeach
        </form>

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
      </div>{{-- //.order-item-area --}}

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
        <button class="btn fw-bold send-btn" data-bs-toggle="modal" data-bs-target="#sendOrder">SEND ORDER</button>
        <button class="btn btn-light fw-bold cxl-btn">CANCEL</button>
      </div>

      

      <!-- Modal -->
      <div class="modal fade" id="sendOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              Your order has been completed!
            </div>
              
          </div>
        </div>
      </div>
    </div>

    

  </div>
</div>



<script>
  // オーダーアイテムの合計金額と税込み金額を計算する関数
  function calculateTotal() {
      let subtotal = 0;
      let total = 0;

      $('.order-item').each(function() {
          const quantity = parseInt($(this).find('.order-quantity').val());
          const price = parseFloat($(this).find('.item-price').text().substring(1)); // 価格から"$"を削除して浮動小数点に変換
          const itemTotal = quantity * price;
          subtotal += itemTotal;
      });

      total = subtotal * 1.1; // 10%のサービスチャージを加える

      $('.subtotal').text('$' + subtotal.toFixed(2)); // 2つの小数点以下の桁を表示
      $('.total').text('$' + total.toFixed(2));
  }

  // オーダーアイテムの数量が変更されたときに合計を再計算
  $('.order-quantity').change(function() {
      calculateTotal();
  });

  // ページ読み込み時にも初回の計算を実行
  calculateTotal();
</script>

<!-- 新しく追加したJavaScript部分 -->
<script>
  
  $(document).ready(function() {
    $('.add-to-order').click(function() {
        const itemId = $(this).data('id');
        const itemName = $(this).data('name');
        const itemPrice = $(this).data('price');
        const itemStock = $(this).data('stock');  // ストック数を取得

        // 動的に数量のドロップダウンを生成
        let quantityOptions = '';
        for (let i = 1; i <= Math.min(itemStock, 10); i++) {
            quantityOptions += `<option value="${i}">${i}</option>`;
        }

        // Add item to order list logic
        // For simplicity, we'll just append a new item every time. 
        // In a real-world application, you might want to check if the item already exists and increase the quantity if it does.
        const orderItemHtml = `
            <div class="order-item rounded px-3 py-2 mb-3" data-id="${itemId}" style="background-color: #F2F2F2">
                <p class="item-name fs-4 fw-bold mb-1">${itemName}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <p class="fs-5 me-3 mb-0">QTY</p>
                        <div class="form-group">
                            <select class="form-control text-center fw-bold order-quantity" style="background-color: #fff;">
                                <option selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <p class="item-ttl fs-3 fw-bold item-price">$${itemPrice}.00</p>
                </div>
            </div>
        `;

        $('.order-item-area').append(orderItemHtml);
        calculateTotal();
    });

    // If you want to allow removing items from the order list, you can add a "Remove" button to each item and bind a click event to it here.
    $(document).on('click', '.remove-item', function() {
    // 該当するアイテムをリストから削除
    $(this).closest('.order-item').remove();

    // 合計金額を再計算
    calculateTotal();
});


    $(document).on('change', '.order-quantity', function() {
          calculateTotal();
      });
});

</script>

@endsection