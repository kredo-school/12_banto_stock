
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
                              <div class="col-6 text-end ps-0 fs-5">price : <span class="fw-normal">{{ $item->price }}</span></div>
                              <div class="col-12 fw-bold">Category : <span class="fw-normal">{{ $item->category_id}}</span></div>
                              <div class="col-12 mt-2">
                                <a href="{{ route('item-view.add-order', ['item' => $item->id]) }}" class="btn btn add-to-order" style="background-color: #99CCFF; color: #fff;"
                                  data-id="{{ $item->id }}" 
                                  data-name="{{ $item->name }}" 
                                  data-price="{{ $item->price }}"
                                  data-stock="{{ $item->inventory }}">
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
      <p class="fs-5 text-end">Order ID : {{ $cart->id }}</p>

      <form id="send-order-form" action="{{ route('send-order') }}" method="POST">
      @csrf
      <!-- ここにオーダー情報のフィールドを追加します -->
      <div class="order-item-area mb-5" style="">
        <!-- オーダーアイテムを追加するためのフォーム -->
        <form id="order-form">
          @foreach ($orderedItems as $cart_item)
            @php  
                $item = $cart_item->item;
                $image = "/storage/images/" . $item->image;
            @endphp
            <div class="order-item rounded px-3 py-2 mb-3" style="background-color: #F2F2F2">
                <p class="item-name fs-4 fw-bold mb-1">NAME:{{ $item->name }} </p>
                
                <img src="{{ $image }}" alt="">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <p class="fs-5 me-3 mb-0">QTY</p>
                        <div class="form-group">
                            <select class="form-control text-center fw-bold order-quantity" style="background-color: #fff;" data-cart-item="{{ $cart_item->id }}">
                                @for ($i = 1; $i <= $item->inventory; $i++)
                                    <option <?php echo ($i == $cart_item->qty) ? "selected" : ""; ?> value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <p class="item-ttl fs-3 fw-bold item-price">PRICE:{{ $item->price }}</p>
                    <!-- アイテムを削除するフォーム -->
                    <form action="{{ route('item-view.delete-item', ['cart_item' => $cart_item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn"><i class="fas fa-trash-alt delete-icon"></i></button>
                    </form>
                </div>
            </div>
          @endforeach

        </form>
      </div>{{-- //.order-item-area --}}

      <div class="d-flex justify-content-between fs-4">
          <p class="">SUBTOTAL</p>
            @php
              $subtotal = 0;
            @endphp

            @foreach ($orderedItems as $cart_item)
                @php
                    $item = $cart_item->item;
                    $subtotal += $item->price * $cart_item->qty;
                @endphp
                <!-- ... (アイテムの表示) ... -->
            @endforeach

          <p class="subtotal">${{ number_format($subtotal, 2) }}</p>
      </div>
      <div class="d-flex justify-content-between fs-4">
          <p class="">SERVICE CHARGE</p>
            @php
                $serviceChargeRate = 0.10; // 10%
                $serviceCharge = $subtotal * $serviceChargeRate;
            @endphp

          <p class="">{{ number_format($serviceCharge, 2) }}</p>
      </div>
      <div class="d-flex justify-content-between fw-bold fs-3">
          <p class="">TOTAL</p>
            @php
              $total = $subtotal + $serviceCharge;
            @endphp

          <p class="total">${{ number_format($total, 2) }}</p>
      </div>
      
      <div class="d-flex justify-content-between">
        <button class="btn fw-bold send-btn" data-bs-toggle="modal" data-bs-target="#sendOrder-#">SEND ORDER</button>
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
      <button type="submit" class="btn fw-bold send-btn">SEND ORDER</button>
    </form>
      

      
    
    
    

  </div>
</div>


<script>
  $(document).ready(function(){
    $("select").change(function(){
      let quantity = $(this).val();
      
      // in your index-view.blade.php
      // add data-cart-item attribute to the select field for the quantity field
      // and set the value to CartItem id
      
      let cart_item = $(this).data('cart_items');
  
    // in your web routes, you need also to create a /cart-item/{cart_item}/update-quantity endpoint
      // point that to your controller
      // in your controller, get the quantity from the request
    // your controller function should look likethis
      /**	
      * public function update(CartItem $cartItem, Request $request) {
    * 		$quantity = $request->quantity;
    *		
    * 		$cartItem->qty = $quantity
    *		$cartItem->save();
    * }
      */
     $.ajax({
      url: `/cart-item/${cart_items}/update-quantity`,
      data: {
        quantity
      },
      success: function(result){
             $("#div1").html(result);
         }
     });
    });
  });
  </script>

  <script>
    $(document).ready(function() {
      $("#send-order-form").submit(function(event) {
        event.preventDefault(); // ページ遷移を防ぐ

        $.ajax({
          type: "POST",
          url: $(this).attr('action'),
          data: $(this).serialize(), // フォームデータをシリアライズして送信
          success: function(response) {
            // オーダーが正常に送信された場合の処理
            // 例: オーダー完了メッセージを表示
            $('#sendOrder').modal('show'); // モーダルを表示
          },
          error: function() {
            // オーダーが送信できなかった場合の処理
            alert('オーダーの送信に失敗しました。');
          }
        });
      });
   });
  </script>





@endsection
