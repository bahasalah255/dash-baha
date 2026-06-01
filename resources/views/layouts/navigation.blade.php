<div class="flex min-h-screen bg-gray-100">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r flex flex-col">

        <div class="p-4 font-bold border-b">
            Dashboard
        </div>

        <div class="p-4 flex flex-col space-y-2">

            <x-nav-link :href="route('dashboard')">
                Dashboard
            </x-nav-link>
             <x-nav-link :href="route('profile.edit')">
                Profile
            </x-nav-link>
            <x-nav-link :href="route('clients')">
                clients
            </x-nav-link>
            

        </div>

        <div class="mt-auto p-4 border-t">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-left w-full text-red-500">
                    Logout
                </button>
            </form>
        </div>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-6">
        {{ $slot }}
    </main>

</div>