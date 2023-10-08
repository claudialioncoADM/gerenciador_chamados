<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        {{-- <x-application-mark class="block h-9 w-auto" /> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="50px" height="50px">
                            <path fill="#71c598"
                                d="M44.206,38.503c-0.472-7.277-0.173-6.212-0.173-11.56c0-0.881-0.346-3.822-0.318-4.703	c0.109-3.437,0.072-4.781-0.07-6.946c-0.195-2.96,0.579-9.146-0.995-10.044c-2.522-1.438-4.894-1.047-7.006-1.152	c-2.112-0.105-8.099,0.453-11.056,0.482c-4.98,0.049-6.211,0.271-11.689,0.048C10.9,4.549,9.256,4.878,7.27,5.117	c-1.995,0.239-3.586,2.382-3.586,6.757c0,4.324,0.773,4.787,0.961,9.239c0.176,4.169-0.334,5.67-0.343,7.322	c-0.007,1.333-0.049,3.754-0.027,5.087c0.02,1.24-0.118,4.974-0.015,6.243c0.103,1.269,0.422,3.263,2.044,4.105	c0.482,0.25,1.026,0.373,1.566,0.432c2.556,0.28,7.919-0.791,8.438-0.843c4.861-0.486,4.633,0.095,9.494,0.095	c1.349,0,5.685-0.122,7.034-0.095c3.415,0.07,5.234,0.068,6.32,0C43.327,43.197,44.206,41.42,44.206,38.503" />
                            <path fill="#010101"
                                d="M8.743,44.825c-0.374,0-0.722-0.015-1.033-0.049c-0.689-0.076-1.259-0.234-1.742-0.485	c-2.032-1.054-2.243-3.654-2.312-4.508C3.588,38.952,3.62,37.171,3.647,35.6c0.015-0.868,0.029-1.645,0.022-2.093	c-0.015-0.919,0-2.356,0.014-3.6l0.014-1.498c0.003-0.596,0.067-1.164,0.142-1.822c0.14-1.239,0.315-2.782,0.201-5.476	c-0.087-2.059-0.299-3.24-0.505-4.383c-0.235-1.307-0.457-2.542-0.457-4.877c0-4.239,1.505-6.951,4.026-7.253	c0.458-0.055,0.898-0.115,1.329-0.173c1.441-0.196,2.803-0.381,4.38-0.317c3.648,0.148,5.414,0.098,7.651,0.034	c1.12-0.032,2.36-0.067,4.012-0.083c1.308-0.013,3.254-0.132,5.136-0.248c2.444-0.151,4.759-0.292,5.95-0.233	c0.442,0.022,0.897,0.024,1.359,0.021c1.776,0.005,3.77-0.002,5.869,1.195c1.285,0.733,1.326,3.385,1.24,7.347	c-0.024,1.168-0.049,2.271,0.006,3.099c0.146,2.219,0.179,3.609,0.071,6.995c-0.014,0.443,0.082,1.541,0.166,2.508	c0.078,0.899,0.152,1.749,0.152,2.178c0,1.742-0.031,2.807-0.058,3.699c-0.055,1.831-0.088,2.936,0.229,7.828l0.001,0.032	c0,3.066-0.938,5.167-5.518,5.453c-1.12,0.07-2.963,0.07-6.36,0.001c-0.784-0.017-2.629,0.02-4.256,0.051	c-1.152,0.022-2.213,0.043-2.769,0.043c-1.978,0-3.106-0.094-4.102-0.176c-1.441-0.12-2.484-0.207-5.343,0.08	c-0.091,0.009-0.339,0.052-0.697,0.113C14.098,44.293,10.966,44.825,8.743,44.825z M12.178,5.096c-1.253,0-2.403,0.156-3.61,0.32	c-0.435,0.059-0.88,0.12-1.344,0.175c-1.97,0.236-3.146,2.577-3.146,6.26c0,2.246,0.214,3.438,0.441,4.7	c0.211,1.175,0.43,2.39,0.52,4.518c0.117,2.771-0.062,4.357-0.207,5.631C4.761,27.33,4.7,27.873,4.697,28.415l-0.014,1.503	c-0.013,1.234-0.028,2.66-0.014,3.573c0.007,0.456-0.007,1.245-0.022,2.126c-0.026,1.471-0.058,3.302,0.006,4.084	c0.101,1.246,0.395,2.985,1.776,3.702c0.371,0.193,0.826,0.317,1.39,0.378c2.02,0.224,5.908-0.439,7.569-0.721	c0.394-0.067,0.666-0.112,0.765-0.122c2.952-0.294,4.088-0.201,5.525-0.081c0.977,0.081,2.083,0.173,4.019,0.173	c0.552,0,1.605-0.021,2.749-0.043c1.635-0.032,3.489-0.069,4.296-0.051c3.368,0.069,5.185,0.07,6.277,0.001	c3.843-0.24,4.577-1.745,4.58-4.439c-0.319-4.925-0.286-6.048-0.23-7.906c0.026-0.885,0.058-1.941,0.058-3.669	c0-0.386-0.075-1.252-0.148-2.091c-0.091-1.044-0.186-2.124-0.17-2.627c0.106-3.344,0.074-4.714-0.069-6.898	c-0.057-0.871-0.033-1.996-0.007-3.186c0.051-2.375,0.128-5.963-0.736-6.456c-1.869-1.066-3.638-1.062-5.373-1.064	c-0.48,0-0.951,0-1.409-0.022c-1.144-0.057-3.529,0.09-5.84,0.232c-1.895,0.116-3.854,0.237-5.188,0.25	c-1.645,0.016-2.879,0.051-3.994,0.083c-2.255,0.065-4.036,0.116-7.721-0.035C12.571,5.1,12.374,5.096,12.178,5.096z" />
                            <path fill="#d6e5e5"
                                d="M9.318,21.51c-0.041,1.548,0.135,3.101,0.521,4.6c0.183,0.709,0.414,1.41,0.754,2.059	c1.028,1.957,2.065,3.083,3.949,4.241c0.403,0.248,1.704,0.711,1.879,1.151c0.159,0.399,0.005,1.42-0.542,1.884	c-0.547,0.464-1.082,0.976-1.737,1.496c2.163,0.643,3.839,0.274,5.735-0.949c0.456-0.294,0.972-1.189,1.198-1.216	c0.242-0.028,1.15,0.435,1.745,0.561c0.943,0.199,2.583,0.369,3.535,0.219c1.975-0.311,1.883,0,4.096-0.595	c0.601-0.161,1.278-0.574,1.854-0.808c0.596-0.242,1.125-0.623,1.62-1.033c1.54-1.278,2.804-2.888,3.679-4.687	c0.598-1.23,1.019-2.563,1.076-3.929c0.116-2.801-0.594-5.596-2.313-7.809c-1.336-1.72-3.108-3.138-5.019-4.183	c-1.998-1.092-4.792-1.571-7.066-1.693c-0.758-0.041-1.525-0.044-2.268,0.109c-0.658,0.136-1.881,0.203-2.521,0.405	c-3.634,1.142-4.721,1.536-7.56,4.656C10.915,17.106,9.253,20,9.318,21.51" />
                            <path fill="#010101"
                                d="M16.121,37.752c-0.682,0-1.381-0.112-2.121-0.332c-0.179-0.053-0.313-0.202-0.348-0.385	c-0.036-0.183,0.034-0.371,0.18-0.486c0.404-0.321,0.762-0.639,1.105-0.944c0.209-0.186,0.413-0.367,0.619-0.542	c0.377-0.32,0.48-1.118,0.401-1.318c-0.105-0.153-0.803-0.479-1.101-0.619c-0.239-0.112-0.448-0.211-0.575-0.29	c-1.939-1.192-3.058-2.394-4.13-4.435c-0.318-0.606-0.571-1.294-0.796-2.167c-0.397-1.541-0.578-3.129-0.537-4.721	c-0.063-1.773,1.777-4.798,2.746-5.862c2.878-3.163,3.988-3.605,7.78-4.797c0.427-0.134,1.033-0.208,1.62-0.28	c0.356-0.044,0.697-0.085,0.95-0.137c0.836-0.173,1.681-0.157,2.396-0.119c1.358,0.073,4.784,0.391,7.28,1.754	c2.069,1.131,3.859,2.624,5.174,4.315c1.687,2.17,2.545,5.06,2.419,8.136c-0.055,1.315-0.434,2.704-1.127,4.127	c-0.902,1.856-2.22,3.534-3.809,4.853c-0.44,0.365-1.037,0.821-1.751,1.112c-0.206,0.083-0.427,0.192-0.65,0.302	c-0.413,0.203-0.84,0.412-1.262,0.525c-1.39,0.373-1.931,0.404-2.557,0.439c-0.393,0.022-0.837,0.047-1.592,0.166	c-1.103,0.175-2.865-0.045-3.716-0.224c-0.326-0.069-0.708-0.216-1.045-0.347c-0.153-0.059-0.346-0.134-0.476-0.175	c-0.072,0.08-0.166,0.196-0.236,0.282c-0.241,0.297-0.514,0.633-0.813,0.826C18.749,37.316,17.468,37.752,16.121,37.752z M15.231,36.68c1.503,0.238,2.829-0.11,4.375-1.108c0.165-0.106,0.394-0.389,0.579-0.616c0.312-0.385,0.519-0.64,0.832-0.677	c0.237-0.024,0.499,0.067,1.017,0.268c0.302,0.117,0.644,0.249,0.891,0.301c0.971,0.204,2.53,0.345,3.354,0.214	c0.805-0.126,1.275-0.153,1.691-0.177c0.595-0.034,1.063-0.06,2.354-0.407c0.328-0.088,0.711-0.276,1.08-0.457	c0.247-0.121,0.488-0.239,0.715-0.332c0.588-0.239,1.104-0.636,1.489-0.955c1.48-1.229,2.707-2.792,3.549-4.521	c0.632-1.299,0.977-2.554,1.025-3.731c0.117-2.841-0.667-5.498-2.208-7.482c-1.231-1.584-2.914-2.985-4.865-4.051	c-1.63-0.891-4.128-1.486-6.853-1.633c-0.651-0.036-1.415-0.05-2.141,0.099c-0.274,0.057-0.644,0.103-1.031,0.15	c-0.516,0.063-1.102,0.135-1.441,0.242c-3.476,1.093-4.525,1.422-7.34,4.516c-1.021,1.122-2.541,3.881-2.485,5.164	c0,0.011,0,0.023,0,0.035c-0.04,1.505,0.13,3.006,0.505,4.462c0.205,0.795,0.431,1.416,0.712,1.951	c0.992,1.887,1.978,2.946,3.768,4.048c0.105,0.064,0.279,0.144,0.476,0.236c0.825,0.386,1.422,0.695,1.605,1.155	c0.252,0.634,0.004,1.868-0.682,2.451c-0.2,0.169-0.398,0.346-0.602,0.527C15.479,36.461,15.357,36.57,15.231,36.68z M21.279,35.223	C21.279,35.223,21.279,35.223,21.279,35.223C21.279,35.223,21.279,35.223,21.279,35.223z" />
                        </svg>
                    </a>
                </div>
{{--
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> --}}
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
