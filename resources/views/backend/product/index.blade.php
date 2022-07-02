@extends('home')
@section('content')
<div class="content-body">
    <!-- Basic Modals start -->
    <section id="basic-modals">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Products List</h4>
                    </div>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <!-- Basic trigger modal -->
                            <div class="basic-modal" style="margin-top: 0px;">
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#default">
                                    Add Product
                                </button>

                                <!-- Modal -->
                                <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel1">Product Add here</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="POST" enctype="multipart/form-data">

                                                    {{csrf_field()}}


                                                    <label for="floating-label1">Products Category</label>
                                                    <select name="id_categories" class="form-control" id="id_categories">
                                                        @foreach($all_categories as $allCategory)
                                                        <option value="{{$allCategory->id}}">{{$allCategory->name}}</option>
                                                        @endforeach

                                                    </select>

                                                    <label for="floating-label1">Name</label>
                                                    <input type="text" name="product_name" class="form-control" id="name" placeholder="Product Name" required />

                                                    <label for="floating-label1">Description</label>
                                                    <input type="text" name="description" class="form-control" id="description" placeholder="Product description" required />

                                                    <label for="floating-label1">Price</label>
                                                    <input type="text" name="product_price" class="form-control" id="price" placeholder="Price" required />

                                                    <label for="floating-label1">writer</label>
                                                    <input type="text" name="writer" class="form-control" id="writer" placeholder="writer name" required />

                                                    <label for="floating-label1">Product Image</label>
                                                    <input type="file" name="product_image" class="form-control" id="product_image" placeholder="Product Name" required />



                                            </div>
                                            <!-- <button type="submit" class="btn btn-primary" id="psubmit">Add</button> -->
                                            <div class="modal-footer">
                                                <input class="btn btn-primary" value="Add" id="psubmit" />
                                            </div>
                                            </form>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="{{ Route('product.create') }}"> <button type="button" class="btn btn-primary">AddProduct</button> </a> -->

                        <div class="row" id="table-responsive" style="margin-top: -20px;">
                            <div class="col-12">
                                <div class="card">

                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">

                                        <thead>

                                            <tr>
                                                <th scope="col" class="text-nowrap">Category</th>
                                                <th scope="col" class="text-nowrap">Product Name</th>
                                                <th scope="col" class="text-nowrap">Price</th>
                                                <th scope="col" class="text-nowrap">Author</th>
                                                <th scope="col" class="text-nowrap">Picture</th>
                                                <th scope="col" class="text-nowrap">Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all_products as $all_product)
                                            <tr>


                                            <td class="text-nowrap">{{ $all_product->category->name}}</td> 
                                                <td class="text-nowrap">{{ $all_product->product_name}}</td>
                                                <td class="text-nowrap">{{ $all_product->product_price}}</td>
                                                <td class="text-nowrap">{{ $all_product->writer}}</td>
                                                <td class="text-nowrap">
                                                    <img src="{{asset('public/uploads/products_image/' .$all_product->product_image)}}" height="70px" width="70px" alt="image"></img>
                                                </td>


                                                <td> {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $all_product->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                    <a class="btn btn-primary" href="{{ route('product.edit',$all_product->id) }}">Edit</a>
                                                </td>


                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                    {!! $all_products->links() !!}

                                </div>
                            </div>
                        </div>


                        <script>
                            $(document).ready(function() {
                                $("#psubmit").click(function(e) {

                                    e.preventDefault();
                                    var formdata = new FormData();

                                    formdata.append('product_image', $('#product_image')[0].files[0]);
                                    formdata.append('price', $('#price').val());
                                    formdata.append('writer', $('#writer').val());
                                    formdata.append('name', $('#name').val());
                                    formdata.append('description', $('#description').val());
                                    formdata.append('id_categories', $('#id_categories').val());
                                    formdata.append('_token', '{{csrf_token()}}');



                                    $.ajax({
                                        url: "{{route('product.store')}}",

                                        type: "POST",
                                        data: formdata,

                                        processData: false,
                                        contentType: false,
                                        success: function(data) {
                                            alert('Product add Successfully');
                                            window.location.reload();
                                        }
                                    });
                                });
                            });
                        </script>
                        

                        @endsection