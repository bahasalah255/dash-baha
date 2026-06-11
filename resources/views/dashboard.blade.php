<x-app-layout>
    <div class="p-6 lg:p-8 space-y-8 max-w-7xl mx-auto">
        
        <!-- Welcome Header Banner -->
        

        <!-- Key Metrics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Clients Stat Card -->
            <div class="relative group bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 overflow-hidden">
                <div class="absolute top-0 right-0 w-36 h-36 bg-gradient-to-bl from-blue-50/50 to-transparent rounded-bl-full opacity-80"></div>
                <div class="relative flex items-center justify-between">
                    <div>
                        <p class="text-sm font-bold text-slate-400 uppercase tracking-wider">Total Clients</p>
                        <p class="text-5xl font-extrabold text-slate-900 mt-2 tracking-tight">{{ $count }}</p>
                        <div class="mt-4 flex items-center gap-1.5 text-xs font-semibold text-blue-600">
                            <span>Manage active clients</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-blue-500/20 transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                </div>
                <a href="{{ route('clients') }}" class="absolute inset-0 z-20"></a>
            </div>

            <!-- Projects Stat Card -->
            <div class="relative group bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 overflow-hidden">
                <div class="absolute top-0 right-0 w-36 h-36 bg-gradient-to-bl from-purple-50/50 to-transparent rounded-bl-full opacity-80"></div>
                <div class="relative flex items-center justify-between">
                    <div>
                        <p class="text-sm font-bold text-slate-400 uppercase tracking-wider">Total Projects</p>
                        <p class="text-5xl font-extrabold text-slate-900 mt-2 tracking-tight">{{ $project }}</p>
                        <div class="mt-4 flex items-center gap-1.5 text-xs font-semibold text-purple-600">
                            <span>Track project progress</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center shadow-lg shadow-purple-500/20 transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                </div>
                <a href="{{ route('projects') }}" class="absolute inset-0 z-20"></a>
            </div>

        </div>

        <!-- Quick Access Board -->
        <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
            <h2 class="text-lg font-bold text-slate-900 mb-6">Quick Actions Panel</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <!-- Action 1 -->
                <a href="{{ route('add') }}" class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 hover:bg-indigo-50/50 hover:text-indigo-600 border border-slate-100 hover:border-indigo-100 transition duration-200">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100/80 text-indigo-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800 hover:text-indigo-600 transition-colors">Add Client</p>
                        <p class="text-xs text-slate-400">Create new profile</p>
                    </div>
                </a>

                <!-- Action 2 -->
                <a href="{{ route('add-project') }}" class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 hover:bg-purple-50/50 hover:text-purple-600 border border-slate-100 hover:border-purple-100 transition duration-200">
                    <div class="w-10 h-10 rounded-xl bg-purple-100/80 text-purple-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800 hover:text-purple-600 transition-colors">Add Project</p>
                        <p class="text-xs text-slate-400">Set budget & client</p>
                    </div>
                </a>

                <!-- Action 3 -->
                <a href="{{ route('clients') }}" class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 hover:bg-emerald-50/50 hover:text-emerald-600 border border-slate-100 hover:border-emerald-100 transition duration-200">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100/80 text-emerald-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800 hover:text-emerald-600 transition-colors">View Clients</p>
                        <p class="text-xs text-slate-400">List all records</p>
                    </div>
                </a>

                <!-- Action 4 -->
                <a href="{{ route('projects') }}" class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 hover:bg-blue-50/50 hover:text-blue-600 border border-slate-100 hover:border-blue-100 transition duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-100/80 text-blue-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800 hover:text-blue-600 transition-colors">View Projects</p>
                        <p class="text-xs text-slate-400">List all workflows</p>
                    </div>
                </a>

            </div>
        </div>

    </div>
</x-app-layout>
