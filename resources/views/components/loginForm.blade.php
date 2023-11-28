<form action="/{{$type}}" method="post">
    <span class="warning">
        @error('username')
        {{$message}}
        @enderror
        @error('password')
        {{$message}}
        @enderror
    </span>

    @csrf
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>

    @if($type === 'register')
    <div>
        <label for="email">Email: </label>
        <input type="text" id="email" name="email" required>
    </div>
    @endif

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">
        @if($type === 'login')
        Log In
        @else
        Register
        @endif
    </button>
</form>
