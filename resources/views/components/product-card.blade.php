 <!-- Start Single Product -->
 <div class="single-product">
     <div class="product-image">
        {{-- defulte image --}}
         <img src="{{  $product->image_url }}" alt="#">
         {{-- <img src="{{  asset('storage/'. $product->image_url') }}" alt="#"> --}}
         {{-- sale view --}}
        @if ($product->sale_persent)
            <span class="sale-tag">-{{ $product->sale_persent }}%</span>
        @endif
        {{-- new product view --}}
        @if ($product->new)
            <span class="new-tag">New</span>            
        @endif
         {{-- <div class="button">
             <a href="{{ route('products.show', $product->id) }}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
         </div> --}}
     </div>
     <div class="product-info">
         <span class="category">Company: {{ $product->category->name ?? 'بدون تصنيف' }}</span> {{-- name of category --}}
         <h4 class="title">
             <a href="{{ route('products.show', $product->slug) }}">Name: {{ $product->name }}</a> {{-- product name --}}
         </h4>
         {{-- <ul class="review">
             <li><i class="lni lni-star-filled"></i></li>
             <li><i class="lni lni-star-filled"></i></li>
             <li><i class="lni lni-star-filled"></i></li>
             <li><i class="lni lni-star-filled"></i></li>
             <li><i class="lni lni-star"></i></li>
             <li><span>4.0 Reviews(s)</span></li>
         </ul> --}}
          {{-- product price --}}
         <div class="price">
             <span>{{ Currency::format($product->price) }}</span>
             @if ($product->compare_price)
             <span class="discount-price">{{ Currency::format($product->compare_price) }}</span>
             @endif 
         </div>
     </div>
 </div>
 <!-- End Single Product -->
