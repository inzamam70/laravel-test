<x-sg-master>
    <x-sg-card>
        <x-slot name="heading">
            Profile :
            <a class="btn btn-primary" href="{{ route('profile2.index') }}"> Back</a>
        </x-slot>
        <x-slot name="body">
            <div class="form-group">
                <h1>Profile :
                    <br>
                    {{ $profile2->name }}
                    <br>
                    {{ $profile2->phone }}
                    <br>
                    {{ $profile2->gender }}
                </h1>
            </div>
        </x-slot>
        <x-slot name="cardFooterCenter">
            End
        </x-slot>
    </x-sg-card>
</x-sg-master>
