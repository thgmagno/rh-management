<x-layout-app pageTitle="Editar departamento">

    <div class="w-100 p-4">

        <h3>Editar colaborador</h3>

        <hr>

        <form action="{{ route('rh-users.update', $rhUser->id) }}" method="post">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $rhUser->id }}">

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ $rhUser->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required value="{{ $rhUser->email }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 d-flex justify-content-end gap-3">
                <a href="{{ route('rh-users.index') }}" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-primary">Salvar alterações</button>
            </div>

        </form>

    </div>

</x-layout-app>