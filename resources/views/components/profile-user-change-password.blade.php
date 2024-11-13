<div class="col-12 col-md-6">
    <div class="custom-card">
        <form action="{{ route('user.profile.update-password') }}" method="post">
            @csrf

            <h4>Change password</h4>

            <div class="mb-3">
                <label for="current_password" class="form-label">Current password</label>
                <input type="password" name="current_password" id="current_password" class="form-control">
                @error('current_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="new_password" class="form-label">New password</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
                @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="new_password_confirmation" class="form-label">Confirm new password</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                    class="form-control">
                @error('new_password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Change password</button>
            </div>

        </form>

        @if (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>