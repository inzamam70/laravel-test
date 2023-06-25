<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
        <x-slot name="heading">
            Create User
        </x-slot>
        <x-slot name="body">
            <form action="{{ route('front_user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="profile2_id">Profile</label>
                <select name="profile2_id" id="profile2_id" class="form-control">
                    <option value="">Select Frofile</option>
                    @foreach ($profile2s as $profile2)
                        <option value="{{ $profile2->id }}">{{ $profile2->name }}</option>
                    @endforeach
                </select>
                <label for="name">User-name</label>
                <x-sg-text name="name" />
                <label for="email">Email-id</label>
                <x-sg-text name="email" />
                <label for="address">Address</label>
                <x-sg-text name="address" />
                <label for="phone_no">Phone-no</label>
                <x-sg-text name="phone_no" />


                <div class="d-flex justify-content-start align-items-center">
                    {{-- <button type="submit" class="btn btn-light legitRipple">Cancel</button> --}}

                    <x-sg-btn-submit />
                </div>
            </form>

        </x-slot>
        <x-slot name="cardFooterCenter">
            End
        </x-slot>
    </x-sg-card>
    <!-- /dashboard content -->
</x-sg-master>
