<x-layout-app pageTitle="Criar departamento">

    <div class="w-100 p-4">

        <h3>Novo departamento</h3>

        <hr>

        <form action="{{ route('departments.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome do departamento</label>
                <input type="text" class="form-control" id="name" name="name" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 d-flex justify-content-end gap-3">
                <a href="{{ route('departments') }}" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-primary">Criar departamento</button>
            </div>

        </form>

    </div>

</x-layout-app>