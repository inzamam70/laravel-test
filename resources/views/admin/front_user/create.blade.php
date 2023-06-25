<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Create User
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('front_user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                        <label for="name">User-name</label>
                        <x-sg-text name="name"/>
                        <label for="email">Email-id</label>
                        <x-sg-text name="email"/>
                        <label for="address">Address</label>
                        <x-sg-text name="address"/>
                        <label for="phone_no">Phone-no</label>
                        <x-sg-text name="phone_no"/>
                        
    
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