<x-layout-app pageTitle="Editar departamento">

    <div class="w-100 p-4">

        <h3>Editar departamento</h3>

        <hr>

        <form action="{{ route('departments.update', $department->id) }}" method="post">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $department->id }}">

            <div class="mb-3">
                <label for="name" class="form-label">Nome do departamento</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ $department->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 d-flex justify-content-end gap-3">
                <a href="{{ route('departments') }}" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-primary">Editar departamento</button>
            </div>

        </form>

    </div>

</x-layout-app>