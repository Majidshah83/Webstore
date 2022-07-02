@extends('home')
@section('content')

<div id="edit">
    <section id="floating-label-input">



        <form id="number_form" action="{{route('product.update',$data->id)}}" method="post" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{csrf_field()}}

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Product edit here</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">


                                <div class="col-sm-6 col-12">
                                    <div class="form-label-group">
                                        <input type="hidden" value="{{$data->id}}" name="id" />


                                        <h5>Product Category</h5>
                                        <select name="id_categories" class="form-control">
                                            @foreach($all_categories as $allCategory)
                                            <option value="{{$allCategory->id}}">{{$allCategory->name}}</option>
                                            @endforeach
                                        </select>

                                        <br>


                                        <!-- <label for="floating-label">Name</label> -->
                                        <h5>Name</h5>
                                        <input type="text" name="product_name" value="{{$data->product_name}}" class="form-control" />
                                        <h5>Description</h5>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control" />

                                        <h5>price</h5>
                                        <input type=" text" name="product_price" value="{{$data->product_price}}" class="form-control" />

                                        <h5>writer namr</h5>
                                        <input type=" text" name="writer" value="{{$data->writer}}" class="form-control" />

                                        <h5>image</h5>
                                        <input type="file" name="product_image" class="form-control" />
                                        <img src="{{asset('public/uploads/products_image/' .$data->product_image)}}" height="70px" width="70px" alt="image"></img>


                                    </div>
                                    <button type=" submit" class="btn btn-primary">Update</button>
        </form>


</div>

</div>
</div>
</div>

</div>
</div>

</section>

</div>

@endsection