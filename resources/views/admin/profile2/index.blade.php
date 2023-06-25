<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Create Profile
    </x-slot>
    <x-slot name="body">
           <a href="{{ route('profile2.create') }}"><button type="button" class="btn btn-primary">Create</button>
            <table class="table datatable-highlight text-center" id="solid_tab0">
                <thead>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Gender</th>
                    <th>Action</th>
                </thead>
                @php
                    $sl =1;
                @endphp
                <tbody>
                    @foreach ($profile2s as $profile2)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $profile2->name }}</td>
                            <td>{{ $profile2->phone }}</td>
                            <td>{{ $profile2->gender }}</td>
                            <td><a href="{{ route('profile2.show', $profile2->id) }}" class="btn 
                                btn-sm 
                                bg-success 
                                border-2 
                                border-success 
                                btn-icon 
                                rounded-round 
                                legitRipple 
                                shadow 
                                mr-1">
                                <i class="icon-eye"></i></a>
                                <a href="{{ route('profile2.edit', $profile2->id) }}" class="btn 
                                btn-sm 
                                bg-primary 
                                border-2 
                                border-primary 
                                btn-icon 
                                rounded-round 
                                legitRipple 
                                shadow 
                                mr-1">
                                <i class="icon-pen"></i></a>
                                
                                <a href="{{ route('profile2.destroy',$profile2->id) }}"  class="btn 
                                btn-sm 
                                bg-danger 
                                border-2 
                                border-danger 
                                btn-icon 
                                rounded-round 
                                legitRipple 
                                shadow 
                                mr-1">
                                <i class="icon-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </x-slot>
    <x-slot name="cardFooterCenter">
        End
    </x-slot>
    </x-sg-card>
    <!-- /dashboard content -->
    </x-sg-master>
    {{-- //{{ route('front_profile.create',$profile2->id) }} --}}