<form action="{{ url('admin/' .$users->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}"></div>
    <div class="form-group">
        <label for="email">Email</label><input type="email" class="form-control" id="email" name="email"
                                               value="{{ $users->email }}"></div>
    <div class="form-group"><label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $users->phone }}"></div>
    <div class="form-group"><label for="address">Address</label><input type="text" class="form-control" id="address"
                                                                       name="address" value="{{ $users->address }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ url('/admin') }}" class="btn btn-primary">Back</a></form>

