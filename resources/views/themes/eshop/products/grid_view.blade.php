<div class="row">
    @forelse ($products as $product)
        @include('themes.eshop.products.grid_box')
    @empty
        No product found!
    @endforelse
</div>