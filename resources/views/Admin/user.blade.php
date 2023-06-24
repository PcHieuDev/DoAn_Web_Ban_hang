<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web xịn</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background-color: #d0cbcb;
        }

        .container {
            margin-top: 30px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .account-user-name {
            padding-left: 7px;
        }

        .btn-primary {
            margin-top: 10px;
        }

        .form-group {
            display: inline-block;
            margin-right: 10px;
        }

        .table {
            margin-top: 20px;
        }

        .btn-group {
            margin-bottom: 5px;
        }

        .text-center {
            margin-top: 20px;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Danh sách người dùng</h1>
        @if(session()->has('ad_name'))
            <span class="account-user-name"><strong>{{ session()->get('ad_name') }}</strong></span>
            <div>
                <a href="{{ url('/logoutad') }}" class="btn btn-primary">Logout</a>
            </div>
        @else
            <li><a id="login-modal" class="js-buy-ticker" href="/loginadmin" data-bs-toggle="modal" data-bs-target="#getMember">Đăng nhập admin</a></li>
        @endif
        <form action="{{ route('user.index') }}" method="GET" class="form-inline">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm" name="search" value="{{ $search }}">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @if ($users)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('user.edit' , $user->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary">View</a>
                            </div>
                            <form method="POST" action="{{ url('/admin' . '/' . $user->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">Không tìm thấy kết quả.</td>
                </tr>
            @endif
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
        </div>
    </div>
@endsection
@if ($users)
    {{ $users->links() }}
@endif
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- App scripts -->
@stack('scripts')
</body>
</html>
