@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        @include('elements.admin.flash-message')
                        <h4 class="card-title">Add new property</h4>
                        <form method="post" action="{{ url('/properties/store') }}" enctype="multipart/form-data" class="form-sample">
                            @csrf
                            <p class="card-description">
                                Property info
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input name="price" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description">
                                Address
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Location</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Choose Location">
{{--                                            <input type="text" class="form-control" />--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">City</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">State</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Country</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Latitude</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="latitude" name="latitude" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Longitude</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="longitude" id="longitude" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Images</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="col-12">
                                            <input name="images[]" id="img_upload" type="file" class="file" multiple
                                                   data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control height-auto" id="exampleTextarea1" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    @include('properties.google-map-script')--}}
    <script type="text/javascript">
        $.fn.fileinputBsVersion = "3.3.7"; // if not set, this will be auto-derived
        // initialize plugin with defaults
        $("#img_upload").fileinput();
        // with plugin options
        $("#img_upload").fileinput({'showUpload':false, 'previewFileType':'any'});
    </script>
@endsection
