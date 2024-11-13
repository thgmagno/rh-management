<x-layout-app pageTitle="User Profile">

    <div class="w-100 p-4">
        <h3>User Profile</h3>

        <hr>
        <x-profile-user-data />
        <hr>

        <div class="container-fluid m-0 p-0 mt-5">
            <div class="row">
                <x-profile-user-change-password />
                <x-profile-user-change-data />
            </div>
        </div>

    </div>

</x-layout-app>