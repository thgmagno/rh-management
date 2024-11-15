<x-layout-app pageTitle="Departmentos">
    <div class="w-100 p-4">

        <h3>Departments</h3>

        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($departments->isEmpty())
            <div class="text-center my-5">
                <p>Nenhum departamento encontrado.</p>
                <a href="{{ route('departments.create') }}" class="btn btn-primary">Criar um novo departamento</a>
            </div>

        @else
            <div class="mb-3">
                <a href="{{ route('departments.create') }}" class="btn btn-primary">Criar um novo departamento</a>
            </div>

            <table class="table w-100 table-responsive" id="table">
                <thead class="table-dark">
                    <th>Department</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                        <tr>
                            <td>{{ $department->name }}</td>
                            <td>
                                <div class="d-flex gap-3 justify-content-end">

                                    @if ($department->id == 1)
                                        <i class="fas fa-lock"></i>
                                    @else
                                        <a href="{{ route('departments.edit', $department->id) }}"
                                            class="btn btn-sm btn-outline-dark">
                                            <i class="fa-regular fa-pen-to-square me-2"></i>Editar
                                        </a>
                                        <a href="{{ route('departments.destroy.confirm', $department->id) }}"
                                            class="btn btn-sm btn-outline-dark">
                                            <i class="fa-regular fa-trash-can me-2"></i>Excluir
                                        </a>
                                    @endif

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>
</x-layout-app>