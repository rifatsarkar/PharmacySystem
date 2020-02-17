@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Medicine Form </h4>
                </div>
                <div class="panel-body">

                    <h2 class="text-success text-center">{{ Session::get('message') }}</h2>

                    {{ Form::open(['route'=>'update-product', 'method'=>'post', 'name'=>'editForm', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data'  ]) }}


                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category_id">
                                <option> -- Category Name -- </option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Company </label>
                        <div class="col-md-9">
                            <select class="form-control" name="brand_id">
                                <option> -- Brand Name -- </option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id  }}"> {{ $brand->brand_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3">Medicine Name </label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="product_name">{{ $products->product_name }}</textarea>
                            <input type="hidden" class="form-control" name="product_id" value="{{ $products->id }}"  />
                            <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Mdicine Price </label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="product_price">{{ $products->product_price }}</textarea>
                            <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Medicine Quantity </label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="product_quantity">{{ $products->product_quantity }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Group </label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="short_description"> {{ $products->short_description }} </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"> Description </label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="editor" name="long_description">{{ $products->long_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Medicine Image </label>
                        <div class="col-md-9">
                            <input type="file" accept="image/*" name="product_image" />
                            <br/>
                            <img src="{{ asset($products->product_image) }}" height="80" width="80" >
                        </div>
                    </div>





                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" {{ $products->publication_status == 1 ? 'checked' : '' }} name="publication_status" value="1"/> Published</label>
                            <label><input type="radio" {{ $products->publication_status == 0 ? 'checked' : '' }} name="publication_status" value="0"/> Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" value="Update Product Info" class="btn btn-success btn-block"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['editForm'].elements['category_id'].value = '{{ $products->category_id }}';
        document.forms['editForm'].elements['brand_id'].value = '{{ $products->brand_id }}';
    </script>

@endsection