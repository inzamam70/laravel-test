
<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Edit Slider
    <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                        <label for="status">Status</label>
                        <input type="text" name="status" value="{{ $category->status }}" class="form-control">
    
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