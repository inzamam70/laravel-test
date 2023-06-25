
<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Edit Product
    <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                        <label for="category_name">Category_name</label>
                        <input type="text" name="category_name" value="{{ $product->category_name }}" class="form-control">
                        <label for="brand_name">Brand_name</label>
                        <input type="text" name="brand_name" value="{{ $product->brand_name }}" class="form-control">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="{{ $product->description }}" class="form-control">
                        <label for="image">Image</label>
                        <input type="text" name="image" value="{{ $product->image }}" class="form-control">
                        <label for="status">Status</label>
                        <input type="text" name="status" value="{{ $product->status }}" class="form-control">
                        <div class="d-flex justify-content-start align-items-center">
                            {{-- <button type="submit" class="btn btn-light legitRipple">Cancel</button> --}}
                            
                            <x-sg-btn-submit/>
                        </div>
                    </form>
    
    </x-slot>
    <x-slot name="cardFooterCenter">
        End
    </x-slot>
    </x-sg-card>
    <!-- /dashboard content -->
    </x-sg-master>