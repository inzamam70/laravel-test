<x-sg-master>
    <!-- Dashboard content -->
    <x-sg-card>
    <x-slot name="heading">
    Create Slider
    </x-slot>
    <x-slot name="body">
            <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" placeholder="Enter Title">
                        </div>
    
                        <div class="form-group">
                            <label>Caption</label>
                            <input name="caption" type="text" class="form-control" placeholder="Enter Caption">
                        </div>
    
                        <div class="form-group">
                            <label>Alt</label>
                            <input name="alt" type="text" class="form-control" placeholder="Alter">
                        </div>
                        <div class="form-group">
                            <label>Upload Picture</label>
                            <input type="file" name="image" class="form-control" placeholder="Upload Picture">
                        </div>
    
                        <div class="d-flex justify-content-start align-items-center">
                            {{-- <button type="submit" class="btn btn-light legitRipple">Cancel</button> --}}
                            <x-sg-custom-pink-color/>
                            <button type="submit" class="btn bg-blue ml-3 legitRipple">Submit <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
    
    </x-slot>
    <x-slot name="cardFooterCenter">
        End
    </x-slot>
    </x-sg-card>
    <!-- /dashboard content -->
    </x-sg-master>