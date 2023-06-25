<x-sg-master>
    <x-sg-card>
        <x-slot name="heading">
            Customer :
            <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </x-slot>
            <x-slot name="body">
                <div class="form-group">
                    <h1>Customer :
                        <br>
                
                    {{$customer->name}}
                    <br>
                    {{ $customer->email }}
                    <br>
                    {{ $customer->address }}
                    <br>
                    {{ $customer->phone_no }}
                    </h1>  
                </div>
            </x-slot>
            <x-slot name="cardFooterCenter">
                End
            </x-slot>
    </x-sg-card>
</x-sg-master>