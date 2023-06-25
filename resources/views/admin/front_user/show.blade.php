<x-sg-master>
    <x-sg-card>
        <x-slot name="heading">
            User :
            </x-slot>
            <x-slot name="body">
                <div class="form-group">
                    <h1>User :
                        <br>
                
                    {{$user->name}}
                    <br>
                    {{ $user->email }}
                    <br>
                    {{ $user->address }}
                    <br>
                    {{ $user->phone_no }}
                    </h1>
                
                   
                </div>
            </x-slot>
            <x-slot name="cardFooterCenter">
                End
            </x-slot>
    </x-sg-card>
</x-sg-master>