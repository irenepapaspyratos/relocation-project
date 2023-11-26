<section class="formWrapper">
    <h1>Log In</h1>

    <form action="/login" method="post">
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

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>

</section>
