
<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Edit User
    <a class="btn btn-primary" href="{{ route('front_user.index') }}"> Back</a>
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('front_user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <label for="name">User-Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                        <label for="email">Email-id</label>
                        <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                        <label for="address">Address</label>
                        <input type="text" name="address" value="{{ $user->address }}" class="form-control">
                        <label for="phone_no">Phone-No</label>
                        <input type="text" name="phone_no" value="{{ $user->phone_no }}" class="form-control">
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