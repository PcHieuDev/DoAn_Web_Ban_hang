
<div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">

            <form action="{{ url('admin/' .$users->id) }}" method="post">
                @csrf
                @method('PUT')
               {{-- <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />--}}
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="name" value="{{$users->email}}" class="form-control"></br>
                <label>Level</label></br>
                <input type="text" name="level" id="name" value="{{$users->level}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$users->address}}" class="form-control"></br>
                <label>Phone</label></br>
                <input type="text" name="phone" id="mobile" value="{{$users->phone}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>



