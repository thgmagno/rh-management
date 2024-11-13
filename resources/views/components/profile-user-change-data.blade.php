<div class="col-12 col-md-6">
    <div class="custom-card">
        <form action="{{ route('profile.update-data') }}" method="post">

            @csrf

            <h3>Alterar dados pessoais</h3>

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Endereço de e-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Atualizar dados</button>
            </div>

        </form>

        @if (session('success_change_data'))
            <div class="alert alert-success mt-3">
                {{ session('success_change_data') }}
            </div>
        @endif
    </div>
</div>