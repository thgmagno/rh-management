<x-layout-app pageTitle="Excluir colaborador">

    <div class="w-100 p-4">

        <h3>Tem certeza que deseja excluir o registro deste colaborador?</h3>

        <hr>

        <h3 class="my-5 text-center">{{ $rhUser->name }}</h3>

        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('rh-users.index') }}" class="btn btn-secondary px-5">Não</a>
            <form action="{{ route('rh-users.destroy', $rhUser->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger px-5">Sim</button>
            </form>
        </div>

    </div>

</x-layout-app>