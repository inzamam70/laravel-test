<x-sg-master>
    <x-sg-card>
        <x-slot name="heading">
            Product :
            <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
        </x-slot>
        <x-slot name="body">
            <div class="form-group">
                <h1>Product :
                    <br>
                    {{ $product->name }}
                    <br>
                    {{ $product->category_name }}
                    <br>
                    {{ $product->brand_name }}
                    <br>
                    {{ $product->description }}
                    <br>
                    {{ $product->image }}
                    <br>
                    {{ $product->status }}
                </h1>
            </div>
        </x-slot>
        <x-slot name="cardFooterCenter">
            End
        </x-slot>
    </x-sg-card>
</x-sg-master>
