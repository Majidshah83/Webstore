@extends('home')
@section('content')


<section id="floating-label-input">
    
    <!-- <form action="{{ route('categories.update',$data->id) }}" method="PATCH"> -->
    
    <form id="number_form" action="{{route('categories.update',$data->id)}}" method="post" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{csrf_field()}}

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Category edit here</h4>
                </div>
                <div class="card-body">
                    <div class="row">


                        <div class="col-sm-6 col-12">
                            <div class="form-label-group">
                                <input type="hidden" value="{{$data->id}}" name="id" />
                                <label for="floating-label1">Name</label>
                                <input type="text" value="{{$data->name}}" name="category_name" class="form-control" id="floating-label1" placeholder="Label-placeholder" />
                                

                                <label for="floating-label1">Image</label>
                                        <input type="file" name="category_image" class="form-control" />
                                        <img src="{{asset('public/uploads/products_image/' .$data->category_image)}}" height="70px" width="70px" alt="image"></img>

                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>


                             </form> 
                            

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </form>
</section>


@endsection