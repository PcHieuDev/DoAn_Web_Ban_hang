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

    .card-title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        margin-bottom: 5px;
    }
</style>

<div class="card">
    <div class="card-header">User Information</div>
    <div class="card-body">
        <div class="card-body">

            <img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-6/355729654_1711883595905960_285570941724771768_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=JmvAsUa838QAX_P0URJ&_nc_ht=scontent.fdad2-1.fna&oh=00_AfDjOJehp0vEKPWHbssW4BeiQoIZRDyeYMJj_dIpfmfI5w&oe=649B1AA7" alt="" style="width: 100%; height: 200px; object-fit: cover;">
            <h5 class="card-title">Name: {{ $users->name }}</h5>
            <p class="card-text">Address: {{ $users->address }}</p>
            <p class="card-text">Phone: {{ $users->phone }}</p>
            <p class="card-text">Email: {{ $users->email }}</p>
        </div>
    </div>
</div>
