
@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-12">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Add Post</h3>
                        </div>
                    </div>
                </div>

                {{-- message --}}
                {!! Toastr::message() !!}

                <div class="card">
                    <form action="{{route('article.save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <div class="bank-inner-details">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Excerpt<span class="text-danger">*</span></label>
                                        <input type="text" name="excerpt" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Body</label>
                                        <div id="editor" name="body"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Blog Image</label>
                                        <div class="change-photo-btn">
                                            <div>
                                                <p>Add Image</p>
                                            </div>
                                            <input type="file" name="upload" class="upload">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon">
                                        <label>Post Date <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" name="post_date" type="text" placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Author<span class="text-danger">*</span></label>
                                        <input type="text" name="author" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" blog-categories-btn pt-0">
                        <div class="bank-details-btn ">
                            <button type="submit" class="btn bank-cancel-btn me-2">Add Post</button>
                            <!-- <a href="blog.html" class="btn bank-cancel-btn me-2">Add Post</a> -->
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
