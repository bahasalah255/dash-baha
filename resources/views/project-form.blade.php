<x-app-layout>
    <div class="p-6 lg:p-8 max-w-2xl mx-auto space-y-8">
        
        <!-- Header -->
        <div class="flex items-center gap-4">
            <a href="{{ route('projects') }}" class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white text-slate-600 hover:text-slate-900 border border-slate-200 shadow-sm transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-slate-900 tracking-tight">Add New Project</h1>
                <p class="text-sm text-slate-500">Initiate a new project timeline and link it to an existing client.</p>
            </div>
        </div>

        <!-- Card Form -->
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden p-8">
            <form method="POST" action="{{ route('project.store') }}" class="space-y-6">
                @csrf

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="p-4 bg-red-50 border border-red-200/60 rounded-2xl text-sm text-red-700 space-y-1">
                        <p class="font-bold">Please correct the following errors:</p>
                        <ul class="list-disc pl-5 space-y-0.5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Project Title -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700">Project Title</label>
                    <input type="text" name='title' value="{{ old('title') }}" placeholder="e.g. Website Development"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">
                </div>

                <!-- Description -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700">Description</label>
                    <textarea name='description' rows="4" placeholder="Brief outline of the project scope..."
                              class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">{{ old('description') }}</textarea>
                </div>

                <!-- Tech Stack & Budget -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700">Tech Stack</label>
                        <input type="text" name='stack' value="{{ old('stack') }}" placeholder="e.g. Laravel, React, Tailwind"
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700">Budget ($)</label>
                        <input type="number" name='budget' value="{{ old('budget') }}" placeholder="e.g. 5000"
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">
                    </div>
                </div>

                <!-- Deadline & Status -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700">Deadline</label>
                        <input type="date" name='deadline' value="{{ old('deadline') }}"
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700">Status</label>
                        <select name='status'
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150 bg-white">
                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ old('status') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="paused" {{ old('status') == 'paused' ? 'selected' : '' }}>Paused</option>
                        </select>
                    </div>
                </div>

                <!-- Associated Client -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700">Select Client</label>
                    <select name='client_id'
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150 bg-white">
                        <option value="">Choose a client...</option>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                                {{ $client->name }} ({{ $client->company ?? 'No Company' }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit actions -->
                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                    <a href="{{ route('projects') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-50 transition duration-150">
                        Cancel
                    </a>
                    <button type='submit' class="px-6 py-2.5 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white rounded-xl text-sm font-semibold shadow-lg shadow-indigo-500/25 transition duration-150 hover:-translate-y-0.5">
                        Add Project
                    </button>
                </div>

            </form>
        </div>

    </div>
</x-app-layout>
