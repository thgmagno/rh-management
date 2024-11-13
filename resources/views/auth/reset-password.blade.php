<x-layout-guest page-title="Redefinir a senha">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 md:col-5 pb-5">

                <!-- logo -->
                <div class="text-center mb-5">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="200px">
                </div>

                <!-- redefine password -->
                <div class="auth-card">

                    <form action="{{ route('password.update') }}" method="post">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation">Confirmar Senha</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="auth-card-footer">
                            <a href="{{ route('login') }}">Voltar para o login</a>
                            <button type="submit" class="btn btn-primary px-4">Definir Senha</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout-guest>