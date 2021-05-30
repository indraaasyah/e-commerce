<div class="col-lg-4 col-md-6 col-12">
    <div class="single-product">
        <div class="product-img">
            <a href="{{ url('product/'. $product->slug) }}">
                @if ($product->productImages->first())
					<img src="{{ asset('storage/'.$product->productImages->first()->path) }}" alt="{{ $product->name }}">
				@else
					<img src="https://via.placeholder.com/550x750" alt="{{ $product->name }}">
				@endif 
                {{-- <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#"> --}}
            </a>
            <div class="button-head">
                <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" product-slug="{{ $product->slug }}" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" product-slug="{{ $product->slug }}" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                </div>
                <div class="product-action-2">
                    <a title="Add to cart" href="#" product-id="{{ $product->id }}" product-type="{{ $product->type }}" product-slug="{{ $product->slug }}">Add to cart</a>
                </div>
            </div>
        </div>
        <div class="product-content">
            <h3><a href="{{ url('product/'. $product->slug) }}">{{ $product->name }}</a></h3>
            <div class="product-price">
                <span>{{ number_format($product->priceLabel()) }}</span>
            </div>
        </div>
    </div>
</div>