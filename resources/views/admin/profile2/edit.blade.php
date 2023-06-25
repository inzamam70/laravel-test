
<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Edit Profile
    <a class="btn btn-primary" href="{{ route('profile2.index') }}"> Back</a>
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('profile2.update',$profile2->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $profile2->name }}" class="form-control">
                        <label for="phone">Phone No</label>
                        <input type="text" name="phone" value="{{ $profile2->phone }}" class="form-control">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" value="{{ $profile2->gender }}" class="form-control">
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