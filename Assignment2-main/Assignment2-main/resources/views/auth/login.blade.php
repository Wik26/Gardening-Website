<x-layout title="Sign In">
    <h1>Sign In</h1>
    <form method="POST" action="/login">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="@error('email') has-error @enderror"/>
            @error ('email')
            <div class="error__msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="@error('password') has-error @enderror"/>
            @error ('password')
            <div class="error__msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Sign in</button>
        </div>
    </form>
    @if (session('invalid'))
        <div class="alert alert-status">
            {{ session('invalid') }}
        </div>
    @endif
</x-layout>