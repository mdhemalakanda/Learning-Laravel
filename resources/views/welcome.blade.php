@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('handle-user') }}">
    @csrf
    <input name="username" placeholder="Username" type="text" />
    @error('username')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input name="password" placeholder="Password" type="password" />
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" value="Submit">
</form>
