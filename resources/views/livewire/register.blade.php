<div>
    <form action="{{ route('register') }}" method="post">
        @csrf

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text"
                class="form-control @if ($errors->has('name')) is-invalid
 @elseif($name == null) @else is-valid @endif"
                name="name" wire:model="name" placeholder="Nama Lengkap">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Alamat Email</label>
            <input type="text"
                class="form-control @if ($errors->has('email')) is-invalid
        @elseif($email == null) @else is-valid @endif"
                name="email" wire:model="email" placeholder="User@gmail.com">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password"
                class="form-control @if ($errors->has('password')) is-invalid
        @elseif($password == null) @else is-valid @endif"
                name="password" wire:model="password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Confirmation Password</label>
            <input type="password"
                class="form-control @if ($errors->has('password_confirmation')) is-invalid
        @elseif($password_confirmation == null) @else is-valid @endif"
                name="password_confirmation" wire:model="password_confirmation">
            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
