<x-sg-master>
    <x-sg-card>
        <x-slot name="heading">
            Slider :
            <a class="btn btn-primary" href="{{ route('slider.index') }}"> Back</a>
        </x-slot>
        <x-slot name="body">
            <div class="form-group">
                <h1>Slider :
                    {{ $slider->title }}
                    <br>
                    {{ $slider->description }}
                </h1>
            </div>
        </x-slot>
        <x-slot name="cardFooterCenter">
            End
        </x-slot>
    </x-sg-card>
</x-sg-master>
