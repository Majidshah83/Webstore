@extends('home')
@section('content')
<div class="content-body">
    <!-- Basic Modals start -->
    <section id="basic-modals">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Categories List</h4>
                    </div>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <!-- Basic trigger modal -->
                            <div class="basic-modal" style="margin-top: 0px;">
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#default">
                                    Category Add
                                </button>
                                <!-- Modal -->
                                <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel1">Categories Add Here</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="warning-message"></div>
                                                <h5>Catgory Name</h5>
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <input type="text" name="name" class="form-control" id="category_name" placeholder="Category name " required />

                                                    <label for="floating-label1">Category Image</label>
                                                    <input type="file" name="category_image" class="form-control" id="category_image" placeholder="Product Name" required />
                                                    <div class="modal-footer">
                                                        <input class="btn btn-primary" id="csubmit" value="Add">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="{{ Route('categories.create') }}"> <button type="button" class="btn btn-primary">AddCategory</button> </a> -->


                    <div class="row" id="table-responsive" style="margin-top: -40px;">
                        <div class="col-12">
                            <div class="card">
                            </div>
                            <div class="table-responsive" style="margin-top: 0px;">
                                <table class="table mb-0" id="table_id" ">
                                        <thead>
                                            <tr>
                                                <th scope=" col" class="text-nowrap">#Name</th>
                                                <th scope=" col" class="text-nowrap">Picture</th>

                                                <th scope="col" class="text-nowrap">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $categories)
                                        <tr>

                                            <td class="text-nowrap">{{ $categories->name}}</td>
                                            <td class="text-nowrap"><img src="{{asset('public/uploads/products_image/' .$categories->category_image)}}" height="70px" width="70px" alt="image"></img></td>
                                            <td> {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $categories->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                                <a id="submit" class="btn btn-primary" href="{{ route('categories.edit',$categories->id) }}">Edit</a>
                                            </td>

                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                {!! $data->links() !!}
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {


        $("#csubmit").click(function(e) {

e.preventDefault();
var formdata = new FormData();

formdata.append('category_image', $('#category_image')[0].files[0]);
formdata.append('category_name', $('#category_name').val());
formdata.append('_token', '{{csrf_token()}}');



$.ajax({
    url: "{{route('categories.store')}}",

    type: "POST",
    data: formdata,

    processData: false,
    contentType: false,
   
success: function(response) {
                    if (response.success) {
                        alert(response.success);
                        window.location.reload();
                    } else if (response.warning) {
                        $('.warning-message').empty();
                        $('.warning-message').append(`<span style= "color:red">` + response.warning + `</span>`);
                    }


                }

            });

        });

    });
</script>


@endsection