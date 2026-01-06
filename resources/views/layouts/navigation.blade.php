<nav class="bg-white border-b border-gray-100 relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Left side -->
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex sm:items-center sm:ml-10 space-x-8">

                    <!-- Dashboard -->
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>

                    <!-- ✅ TASK CRUD LINK -->
                    <x-nav-link :href="route('tasks.index')" :active="request()->routeIs('tasks.*')">
                        My Tasks
                    </x-nav-link>

                    <!-- ✅ ADMIN ONLY -->
                    @if(Auth::user()->role === 'admin')
                        <x-nav-link href="{{ url('/admin') }}">
                            Admin
                        </x-nav-link>

                        <x-nav-link href="{{ route('admin.audit') }}">
                            Audit Log
                        </x-nav-link>
                    @endif

                </div>
            </div>

            <!-- Right side -->
            <div class="relative flex items-center">
                <div class="relative">
                    <button
                        onclick="document.getElementById('user-menu').classList.toggle('hidden')"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-600 bg-white hover:text-gray-800 focus:outline-none"
                    >
                        {{ Auth::user()->name }}
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div id="user-menu"
                         class="hidden absolute right-0 mt-2 w-40 bg-white border rounded shadow-lg z-50">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
