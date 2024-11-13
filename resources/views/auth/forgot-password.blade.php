<x-layout-guest page-title="Recuperar senha">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 md:col-4 pb-5">

                <!-- logo -->
                <div class="text-center mb-5">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="200px">
                </div>

                <!-- forgot password -->
                <div class="auth-card">

                    @if (!session('status'))


                        <form action="{{ route('password.email') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <p class="text-muted">Você irá receber um email com um link para recuperar a senha.</p>

                            <div class="auth-card-footer">
                                <a href="{{ route('login') }}">Voltar para o login</a>
                                <button type="submit" class="btn btn-primary px-4">Enviar email</button>
                            </div>
                        </form>

                    @else

                        <div class="text-center mb-5">
                            <p>Se está registrado nesta plataforma, você receberá um email com um link para recuperar a sua
                                senha.</p>
                            <p class="mb-5">Por favor, verifique seu email.</p>
                            <a href="{{ route('login') }}" class="btn btn-primary px-4">Voltar para o login</a>
                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>

</x-layout-guest>