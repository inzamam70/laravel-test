<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Create Category
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <label for="name">name</label>
                        <x-sg-text name="name"/>
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