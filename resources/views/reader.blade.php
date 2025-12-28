<div>
    <h2>Welcome ,{{Auth::user()->name}}</h2>
</div>
<div>
    <h3>You are logged in as Reader</h3>
</div>

<div>
    <a href="{{ route('logout') }}">
        <button>Logout</button>
    </a>
</div>