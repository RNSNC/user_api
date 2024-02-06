<div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text"
           class="form-control"
           name="username"
           id="username"
           placeholder="Username"
           @if(isset($user))
               value="{{ $user->username }}"
           @else
               value="{{ old('username') }}"
           @endif
    >
    @error('username')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email"
           class="form-control"
           name="email"
           id="email"
           placeholder="name@example.com"
           @if(isset($user))
               value="{{ $user->email }}"
           @else
               value="{{ old('email') }}"
           @endif
    >
    @error('email')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password"
           class="form-control"
           name="password"
           id="password"
           placeholder="Password"
    >
    @error('password')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<input id="submit_add" type="submit" value="Create" class="btn btn-success">
