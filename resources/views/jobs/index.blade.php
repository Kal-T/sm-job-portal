<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

   <div class="space-y-4">
       @foreach($jobs as $job)
               <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-grey-200 rounded-lg">
                   <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                  <div>
                      <strong class="text-smjob">{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
                  </div>
               </a>
       @endforeach
   </div>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
