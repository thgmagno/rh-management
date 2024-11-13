<x-layout-app pageTitle="Criar colaborador">

    <div class="w-100 p-4">

        <h3>Novo colaborador</h3>

        <hr>

        <form action="{{ route('rh-users.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 d-flex justify-content-end gap-3">
                <a href="{{ route('rh-users.index') }}" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>

    </div>

</x-layout-app>