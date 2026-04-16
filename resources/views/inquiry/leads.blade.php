 @extends('layout.main')

@section('content')
 
 
 <!-- <section class="grid gap-6 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Recent applications</p>
                        <h3 class="mt-1 text-xl font-semibold text-slate-900 dark:text-white">Latest career form submissions</h3>
                    </div>
                </div>

                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200/70 text-left dark:divide-white/10">
                        <thead class="text-xs uppercase tracking-[0.3em] text-slate-400">
                            <tr>
                                <th class="py-3 pr-4 font-semibold"> First Name</th>
                                 <th class="py-3 pr-4 font-semibold">Last Name</th>
                                <th class="py-3 pr-4 font-semibold">Phone</th>
                                <th class="py-3 pr-4 font-semibold">Email</th>                            
                                <th class="py-3 pr-4 font-semibold">Message</th>
                            
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200/70 text-sm dark:divide-white/10">
                            @forelse($recentApplications as $application)
                                <tr>
                                    <td class="py-4 pr-4 font-medium text-slate-900 dark:text-white">{{ $contacts->first_name }}</td>
                                    <td class="py-4 pr-4 font-medium text-slate-900 dark:text-white">{{ $contacts->last_name }}</td>
                                    <td class="py-4 pr-4 text-slate-500 dark:text-slate-300">{{ $contacts->phone ?? '-' }}</td>
                                    <td class="py-4 pr-4 text-slate-500 dark:text-slate-300">{{ $contacts->email }}</td>
                                    <td class="py-4 pr-4 text-slate-500 dark:text-slate-300">{{ $contacts->message }}</td>
                                 
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="py-10 text-center text-slate-500 dark:text-slate-400">No applications received yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section> -->


@endsection    