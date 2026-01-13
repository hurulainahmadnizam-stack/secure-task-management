<nav class="relative z-50" style="background-color:#5A1A1A;">
   <div class="max-w-7xl mx-auto px-12">

        <div class="flex justify-between items-center h-16">

            <!-- LEFT -->
            <div class="flex items-center">

                <!-- BRAND -->
                <a href="{{ route('dashboard') }}"
                   class="text-xl font-semibold uppercase tracking-[0.25em] pr-8"
                   style="color:#F6EFE7;">
                    Task Management
                </a>

                <!-- NAV LINKS -->
                <ul class="hidden sm:flex items-center ml-28 uppercase text-sm tracking-wider"
                    style="color:#F6EFE7;">

                    <li class="px-6">
                        <a href="{{ route('dashboard') }}" class="hover:opacity-80">
                            Dashboard
                        </a>
                    </li>

                    <li class="opacity-40">|</li>

                    <li class="px-6">
                        <a href="{{ route('tasks.index') }}" class="hover:opacity-80">
                            My Tasks
                        </a>
                    </li>

                    @if(Auth::user()->role === 'admin')
                        <li class="opacity-40">|</li>

                        <li class="px-6">
                            <a href="{{ url('/admin') }}" class="hover:opacity-80">
                                Admin
                            </a>
                        </li>

                        <li class="opacity-40">|</li>

                        <li class="px-6">
                            <a href="{{ route('admin.audit') }}" class="hover:opacity-80">
                                Audit Log
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

            <!-- RIGHT -->
            <div class="relative ml-24">
                <button
                    onclick="document.getElementById('user-menu').classList.toggle('hidden')"
                    class="flex items-center gap-2 text-sm tracking-wide"
                    style="color:#F6EFE7;"
                >
                    {{ Auth::user()->name }}
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <!-- DROPDOWN -->
                <div id="user-menu"
                     class="hidden absolute right-0 mt-2 w-40 rounded shadow-lg"
                     style="background-color:#F6EFE7;">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-200"
                                style="color:#5A1A1A;">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</nav>
