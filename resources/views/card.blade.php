<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="/images/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} руб.</p>
            <p>
                <a href="{{ route('basket') }}" class="btn btn-primary"
                   role="button">В корзину</a>
                {{ $product->getCategory()->name }}
                <a href="/mobiles/iphone_x_64" class="btn btn-default"
                   role="button">Подробнее</a>
            </p>
        </div>
    </div>
</div>
