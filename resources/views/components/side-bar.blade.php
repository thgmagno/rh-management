<div class="d-flex flex-column sidebar pt-4">
    <a href="{{ route('home') }}"><i class="fas fa-home me-3"></i>Início</a>

    <!-- Admin routes -->
    @can('admin')
        <a href="#"><i class="fas fa-users me-3"></i>Colaboradores</a>
        <a href="#"><i class="fas fa-user-gear me-3"></i>RH Colaboradores</a>
        <a href="{{ route('departments') }}"><i class="fas fa-industry me-3"></i>Departamentos</a>
    @endcan

    <hr>

    <!-- Shared routes -->
    <a href="{{ route('user.profile') }}"><i class="fas fa-user me-3"></i>Perfil</a>

    <hr>

    <!-- Logout -->
    <div class="text-center mt-3">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-dark">
                <i class="fas fa-sign-out-alt me-3"></i>Sair
            </button>
        </form>
    </div>
</div>