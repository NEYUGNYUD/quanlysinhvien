@if(session('notification'))
<div class="alert alert-success">
    <ul>
        <li> {{ session('notification') }}</li>
    </ul>
</div>
@endif