<x-layout-app pageTitle="Recursos Humanos">
    <div class="w-100 p-4">

        <h3>Recursos Humanos Colaboradores</h3>

        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (count($colaborators) === 0)
            <div class="text-center my-5">
                <p>Nenhum colaborador encontrado.</p>
                <a href="{{ route('rh-users.create') }}" class="btn btn-primary">Criar um novo colaborador</a>
            </div>

        @else
            <div class="mb-3">
                <a href="{{ route('rh-users.create') }}" class="btn btn-primary">Cadastrar</a>
            </div>

            <table class="table w-100 table-responsive" id="table">
                <thead class="table-dark">
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Permissões</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($colaborators as $colaborator)
                        <tr>
                            <td>{{ $colaborator->name }}</td>
                            <td>{{ $colaborator->email }}</td>

                            @php
                                $permissions = json_decode($colaborator->permissions);
                            @endphp

                            <td>{{ implode(', ', $permissions) }}</td>

                            <td>
                                <div class="d-flex gap-3 justify-content-end">

                                    @if ($colaborator->id == 1)
                                        <i class="fas fa-lock"></i>
                                    @else
                                        <a href="{{ route('rh-users.edit', $colaborator->id) }}"
                                            class="btn btn-sm btn-outline-dark">
                                            <i class="fa-regular fa-pen-to-square me-2"></i>Editar
                                        </a>
                                        <a href="{{ route('rh-users.destroy.confirm', $colaborator->id) }}"
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