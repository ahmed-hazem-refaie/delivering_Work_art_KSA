@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1 class="pull-left">Our Admins</h1>
    <h1 class="pull-right">
        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('appliedartists.create') }}">Add New</a>
    </h1>
</section>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Applied Admins</li>
    </ol>
</nav>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">

                        <div class="table-responsive">
    <table class="table table-striped" id="appliedartists-table">
        <thead>
            <tr>
        <th>Name</th>
        <th>Email</th>



                <th colspan="3" style=" padding-left: 2%;">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
            <td>{{ $users->name }} </td>
            <td>{{ $users->email }}</td>

            <td>

                <input data-id="{{$users->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $users->admin_role ? 'checked' : '' }}>

                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
        {{-- {{ $appliedartists->links() }} --}}

</div>

        </div>
    </div>
    <div class="text-center">

    </div>
</div>
@endsection
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0;
          var user_id = $(this).data('id');

          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/changeStatus',
              data: {'status': status, 'user_id': user_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script>
