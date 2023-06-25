<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Create User
    </x-slot>
    <x-slot name="body">
           <a href="{{ route('front_user.create') }}"><button type="button" class="btn btn-primary">Create</button>
            <table class="table datatable-highlight text-center" id="solid_tab0">
                <thead>
                    <th>Sl</th>
                    <th>name</th>
                    <th>Email-id</th>
                    <th>Address</th>
                    <th>Phone-No</th>
                    <th>Action</th>
                </thead>
                @php
                    $sl =1;
                @endphp
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone_no }}</td>
                            <td><a href="{{ route('front_user.show', $user->id) }}" class="btn 
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
                                <a href="{{ route('front_user.edit', $user->id) }}" class="btn 
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
                                
                                <a href="{{ route('front_user.destroy',$user->id) }}"  class="btn 
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
                                <a href="#"  class="btn 
                                btn-sm 
                                bg-success 
                                border-2 
                                border-success 
                                btn-icon 
                                rounded-round 
                                legitRipple 
                                shadow 
                                mr-1">
                                    <i class="icon-user-plus"></i></a>
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
    {{-- //{{ route('front_profile.create',$user->id) }} --}}