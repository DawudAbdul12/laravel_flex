@extends('admin.layout.app')
@section('content')

            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter visibility-hidden"   data-toggle="appear" data-class="animated bounceIn">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                               Edit a Product
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Edit</li>
                                <li><a class="link-effect" href="/admin/product">All Products</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                @include('admin.message')
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content animated fadeInLeft">
                    <div class="row">
                         <div class="col-md-8">
                            <!-- Default Elements -->
         <div class="block">              
            <div class="block-content">

                    {!! Form::open(['action' => ['productController@update', $product->id ], 'method' => 'POST','files' => true,'class'=> 'form-horizontal push-10-t']) !!}
                                        
                     <div class="form-group">
                       <label class="col-xs-12" for="example-text-input">Product Name</label>
                        <div class="col-sm-12">
                        <input class="form-control" type="text"  name="product_name" placeholder="Enter Product name"  value="{{$product->name}}" required>
                        </div>
                     </div>

                   
                    <div class="form-group">
                        <div class=" block-content-full">
                                <label class="col-xs-12" for="example-text-input">Content</label>
                                            <!-- Summernote Container -->
                        <textarea class="js-summernote" name="content">{{ $product->content }}</textarea>
                                            
                        </div>
                    </div>
                   <br>                
            </div>
         </div>


                        </div>
                     <div class="col-md-4">

                        <div class="block">
                            <div class="block-content">
                                <div class="form-group">
                                     <label class="" for="example-file-input">Product  Picture</label>
                                     <input type="file" id="imageupload" name="pic" >  
                                     <div id="preview-image"><img src="{{ asset('product_images/'.$product->pic) }}" class="thumbimage"></div>
                                </div>
                            </div>
                        </div>


                       

       <div class="block">        
         <div class="block-content">
           <div class="form-horizontal"> 
                <div class="form-group">
                        <label class="col-xs-12" for="example-select">Featured</label>
                         <div class="col-sm-12">
                           <select class="form-control"  name="featured" size="1" required>
                                <option @if($product->featured == "Yes") selected @endif value="Yes">Yes</option>
                                <option  @if($product->featured == "No") selected @endif value="No">Private</option>
                           </select>
                         </div>
                </div>       

             <div class="form-group">
                <label class="col-xs-12" for="example-tags1">Tag</label>
                    <div class="col-xs-12">
                      <input class="js-tags-input form-control" type="text" id="example-tags1" name="tag" value="{{ $product->tag }}">
                    </div>
             </div>

            <div class="form-group">
                 <label class="col-xs-12" for="example-select">Visibility</label>
                  <div class="col-sm-12">
                    <select class="form-control" id="datepicker" name="visibility" size="1" required>
                            <option @if($product->visibility == "Public") selected @endif value="Public">Public</option>
                            <option  @if($product->visibility == "Private") selected @endif value="Private">Private</option>
                    </select>
                  </div>
             </div>

             <div class="form-group">
                    <label class="col-xs-12" for="example-select">Publish</label>
                     <div class="col-sm-12">
                            <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" name="publish" required value="{{ $product->publish }}"/>
                                    <input type='hidden' class="form-control" id="publish" value="" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                            </div>
                     </div>
            </div>
           </div>
          </div>
        </div>

        <div class="block">
                <div class="block-content">
                    <div class="form-group">
                         <label class="" for="example-file-input">Product Gallery</label>
                         <input type="file" id="imageupload" name="picx[]"  multiple>  
                         <div id="preview-s"></div>
                         
                    </div>
                    @foreach($images as $image)
                    <div class="thumbimage" id="img{{ $image->id }}" >
                        <a  href="javascript:void(0);" onclick="deleteImage({{$image->id}})"><i class="fa fa-times"></i>
                        <img src="{{ asset('product_images/'.$image->img)}}" style="width:100px">
                        </a>
                    </div>
                @endforeach
                </div>
         </div>


                 <!-- post btn here --> 
                 <div class="form-group">
                        <div class="col-xs-12">
                                {{ Form::hidden('_method','PUT')}}
                                <a href="/admin/product" class="btn btn-secondary">Back</a>
                                {{ Form::submit('Update',['class'=>'btn btn-danger'] ) }}
                         </div>
                </div>

     {!! Form::close() !!}
     
        </div>
    </div>
    </div>
</div>

                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            @endsection
        