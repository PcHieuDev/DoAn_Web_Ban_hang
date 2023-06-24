<style>
    .card {
        width: 400px;
        margin: 0 auto;
        background-color: #f8f9fa;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        padding: 10px;
        background-color: #343a40;
        color: #fff;
        font-weight: bold;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="submit"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        font-size: 14px;
    }

    input[type="submit"] {
        background-color: #28a745;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }
</style>

<div class="card">
    <div class="card-header">Edit User</div>
    <div class="card-body">
        <form action="{{ url('admin/' . $users->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="text" name="level" id="level" value="{{$users->level}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="{{$users->address}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="{{$users->phone}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
