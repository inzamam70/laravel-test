<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Create Profile
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('profile2.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                        <label for="name">Profile-name</label>
                        <x-sg-text name="name"/>
                        <label for="phone">Phone No</label>
                        <x-sg-text name="phone"/>
                        <label for="gender">Gender</label>
                        <x-sg-text name="gender"/>
                        
    
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