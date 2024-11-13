<x-layout-app pageTitle="Delete department">

    <div class="w-100 p-4">

        <h3>Tem certeza que deseja deletar este departamento?</h3>

        <hr>

        <h3 class="my-5 text-center">{{ $department->name }}</h3>

        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('departments') }}" class="btn btn-secondary px-5">Não</a>
            <form action="{{ route('departments.destroy', $department->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger px-5">Sim</button>
            </form>
        </div>

    </div>

</x-layout-app>