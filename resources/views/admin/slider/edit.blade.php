
<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Edit Slider
    <a class="btn btn-primary" href="{{ route('slider.index') }}"> Back</a>
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <label for="title">Title</label>
                        <x-sg-text name="title"/>
                        <label for="description">Description</label>
                        <x-sg-text name="description"/>
    
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