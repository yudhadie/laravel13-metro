<x-admin.sidebar.main>
    <x-admin.sidebar.menu menu="Dashboard" icon="ki-home-3" link="{{ route('dashboard') }}" id="menu-dashboard" />
    <x-admin.sidebar.menu-parent menu="Setting" icon="ki-setting-2" id="menu-setting">
        <x-admin.sidebar.menu-child menu="Users" id="menu-setting-user" link="{{ route('user.index') }}" />
    </x-admin.sidebar.menu-parent>
</x-admin.sidebar.main>
