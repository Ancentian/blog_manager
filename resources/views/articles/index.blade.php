@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="row">
            <div class="col-md-9">
                <ul class="list-links mb-4">
                    <li class="active"><a href="#">Active Blog</a></li>
                </ul>
            </div>
            <div class="col-md-3 text-md-end">
                <a href="{{ route('articles/addBlog') }}" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i> Add New</a>
            </div>
        </div>
        <div class="row">

            @foreach($articles as $key)
            <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                <div class="blog grid-blog flex-fill">
                    <div class="blog-image">
                        <a href="{{url('article/view/'.$key->id )}}"><img class="img-fluid" src="{{ Storage::url('blog_photos/'.$key->upload) }}" alt="Post Image"></a>
                        <div class="blog-views">
                            <i class="feather-eye me-1"></i> 225
                        </div>
                    </div>
                    <div class="blog-content">
                        <ul class="entry-meta meta-item">
                            <li>
                                <div class="post-author">
                                    <a href="{{url('article/view/'.$key->id )}}">
                                        <img src="{{asset('assets/img/profiles/avatar-01.jpg')}}" alt="Post Author">
                                        <span>
                                            <span class="post-title">{{$key->author}}</span>
                                            <span class="post-date"><i class="far fa-clock"></i> {{$key->created_at}}</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <h3 class="blog-title"><a href="{{url('article/view/'.$key->id )}}">{{$key->tittle}} </a></h3>
                        <p>{!!$key->excerpt!!}</p>
                    </div>
                    <div>
                        <input class="id" value="{{ $key->id }}" hidden>
                        <input class="upload" value="{{ $key->upload }}" hidden>
                    </div>                    
                    <div class="row">
                        <div class="edit-options">
                            <div class="edit-delete-btn">
                               <a href="#" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                               <a href="#" class="text-danger article_delete" data-bs-toggle="modal" data-bs-target="#deleteArticle"><i class="feather-trash-2 me-1"></i> Delete</a>
                           </div>
                           <div class="text-end inactive-style">
                            @if($key->status == 1)
                            <a href="{{url('deactivate/status', $key->id)}}" class="text-success"><i class="feather-eye me-1"></i> Active</a>                  
                            @elseif($key->status == 0)
                            <a href="{{url('update/status', $key->id)}}" class="text-danger"><i class="feather-eye-off me-1"></i> Inactive</a>   
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row">
            {{-- <div class="col-md-9"></div> --}}
            <div class="col-md-3 float-right">
                {{ $articles->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>  

        {{-- model Article delete --}}
    <div class="modal fade contentmodal" id="deleteArticle" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                    <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                        class="feather-x-circle"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('deleteArticle') }}" method="POST">
                        @csrf
                        <div class="delete-wrap text-center">
                            <div class="del-icon">
                                <i class="feather-x-circle"></i>
                            </div>
                            <input type="hidden" name="id" class="e_id" value="">
                            <input type="hidden" name="upload" class="e_upload" value="">
                            <h2>Sure you want to delete</h2>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-success me-2">Yes</button>
                                <a class="btn btn-danger" data-bs-dismiss="modal">No</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>

</div>

<script>
    $(document).on('click','.article_delete',function()
    {
        var _this = $(this).parents('div');
        $('.e_id').val(_this.find('.id').val());
        $('.e_upload').val(_this.find('.upload').val());
    });
</script>


@endsection




