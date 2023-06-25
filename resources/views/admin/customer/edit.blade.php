
<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Edit Customer
    <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
    </x-slot>
    <x-slot name="body">
            <form action="{{ route('customer.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <label for="name">Customer-Name</label>
                        <input type="text" name="name" value="{{ $customer->name }}" class="form-control">
                        <label for="email">Email-id</label>
                        <input type="text" name="email" value="{{ $customer->email }}" class="form-control">
                        <label for="address">Address</label>
                        <input type="text" name="address" value="{{ $customer->address }}" class="form-control">
                        <label for="phone_no">Phone-No</label>
                        <input type="text" name="phone_no" value="{{ $customer->phone_no }}" class="form-control">
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