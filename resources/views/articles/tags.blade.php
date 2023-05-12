
@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">List Users</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">List Users</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Users List</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#tag-modal"><i class="fas fa-plus"></i> Add Tag</button>
                                    
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table
                        class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                        <thead class="student-thread">
                            <tr>
                                <th>*</th>
                                <th>Tag</th>
                                <th>Articles</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $key=>$list )
                            <tr>
                                <td>{{++$key}}</td>
                                <td class="user_id">{{ $list->user_id }}</td>
                                <td>{{ $list->tag_name }}</td>
                                <td>{{ $list->email }}</td>
                                <td class="text-end">
                                    <div class="actions">
                                        <a href="{{ url('view/user/edit/'.$list->user_id) }}"class="btn btn-sm bg-danger-light">
                                            <i class="feather-edit"></i>
                                        </a>
                                        @if (Session::get('role_name') === 'Super Admin')
                                        <a class="btn btn-sm bg-danger-light user_delete" data-bs-toggle="modal" data-bs-target="#deleteUser">
                                            <i class="feather-trash-2 me-1"></i>
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

{{-- model user delete --}}
<div class="modal fade contentmodal" id="deleteUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                    class="feather-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user/delete') }}" method="POST">
                    @csrf
                    <div class="delete-wrap text-center">
                        <div class="del-icon">
                            <i class="feather-x-circle"></i>
                        </div>
                        <input type="hidden" name="user_id" class="e_user_id" value="">
                        <input type="hidden" name="avatar" class="e_avatar" value="">
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

<!-- Add Tag Modal -->
<div id="tag-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Add Tag</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('store.tag')}}"  method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="username" class="form-label local-forms">Tag Name</label>
                        <input class="form-control @error('tag_name') is-invalid @enderror" type="text" id="tag_name" name="tag_name" required value="{{ old('tag_name') }}" placeholder="Tag Name">
                        @error('tag_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


@section('script')

{{-- delete js --}}
<script>
    $(document).on('click','.user_delete',function()
    {
        var _this = $(this).parents('tr');
        $('.e_user_id').val(_this.find('.user_id').text());
        $('.e_avatar').val(_this.find('.avatar').text());
    });
</script>
@endsection

@endsection
