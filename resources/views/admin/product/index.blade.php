<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Create Product
    </x-slot>
    <x-slot name="body">
           <a href="{{ route('product.create') }}"><button type="button" class="btn btn-primary">Create</button>
            <table class="table datatable-highlight text-center" id="solid_tab0">
                <thead>
                    <th>Sl</th>
                    <th>name</th>
                    <th>category_name</th>
                    <th>brand_name</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>status</th>
                    <th>Action</th>
                </thead>
                @php
                    $sl =1;
                @endphp
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->brand_name }}</td>

                            <td>{{ $product->description }}</td>
                            <td>{{ $product->image }}</td>
                            <td>{{ $product->status}}</td>
                            <td><a href="{{ route('product.show', $product->id) }}" class="btn 
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
                                <a href="{{ route('product.edit', $product->id) }}" class="btn 
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
                                
                                <a href="{{ route('product.destroy',$product->id) }}"  class="btn 
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