<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Create Slider
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                </select>
                        <label for="name">name</label>
                        <x-sg-text name="name"/>
                        <label for="category_name">Catagoery-name</label>
                        <x-sg-text name="category_name"/>
                        <label for="brand_name">Brand-name</label>
                        <x-sg-text name="brand_name"/>
                        <label for="description">Description</label>
                        <x-sg-text name="description"/>
                        <label for="image">Image</label>
                        <x-sg-text name="image"/>
                        <label for="status">Status</label>
                        <x-sg-text name="status"/>
    
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