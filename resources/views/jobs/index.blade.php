<x-layout>
  <h1>Avaliable Jobs</h1>
  <ul>
    @forelse ($jobs as $job)
      <li>
        {{ $job }}
      </li>
    @empty
      <li>No jobs available</li>
    @endforelse
  </ul>
</x-layout>
