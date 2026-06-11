<x-app-layout>
    <div class="p-6 lg:p-8 max-w-2xl mx-auto space-y-8">
        
        <!-- Header -->
        <div class="flex items-center gap-4">
            <a href="{{ route('clients') }}" class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white text-slate-600 hover:text-slate-900 border border-slate-200 shadow-sm transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-slate-900 tracking-tight">Edit Client</h1>
                <p class="text-sm text-slate-500">Update details for client #{{ $client->id }}.</p>
            </div>
        </div>

        <!-- Card Form -->
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden p-8">
            <form method='post' action='{{ route('clients.update', $client->id) }}' class="space-y-6">
                @csrf
                @method('PUT')

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

                <!-- Form Fields -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700">Client Name</label>
                    <input type="text" name='name' value="{{ old('name', $client->name) }}" placeholder="e.g. John Doe"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700">Email Address</label>
                        <input type="email" name='email' value="{{ old('email', $client->email) }}" placeholder="e.g. john@example.com"
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700">Phone Number</label>
                        <input type="text" name='phone' value="{{ old('phone', $client->phone) }}" placeholder="e.g. +1 234 567 890"
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700">Company Name</label>
                    <input type="text" name='company' value="{{ old('company', $client->company) }}" placeholder="e.g. Acme Corporation"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700">Notes</label>
                    <textarea name='notes' rows="4" placeholder="Additional details or context about the client..."
                              class="w-full px-4 py-3 rounded-xl border border-slate-200 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition duration-150">{{ old('notes', $client->notes) }}</textarea>
                </div>

                <!-- Submit buttons -->
                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                    <a href="{{ route('clients') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-50 transition duration-150">
                        Cancel
                    </a>
                    <button type='submit' class="px-6 py-2.5 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white rounded-xl text-sm font-semibold shadow-lg shadow-indigo-500/25 transition duration-150 hover:-translate-y-0.5">
                        Save Changes
                    </button>
                </div>

            </form>
        </div>

    </div>
</x-app-layout>
