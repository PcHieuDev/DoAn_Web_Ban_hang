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
            <h5 class="card-title">Name: {{ $users->name }}</h5>
            <p class="card-text">Address: {{ $users->address }}</p>
            <p class="card-text">Phone: {{ $users->phone }}</p>
            <p class="card-text">Email: {{ $users->email }}</p>
        </div>
    </div>
</div>
