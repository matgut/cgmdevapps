<div class="relative mt-3 md:mt-0">
    <input type="text" wire:model.debounce.500ms="search" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0">
        <!--<svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-500 w-4 mt-2 ml-1" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>-->
          <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 w-4 mt-2 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
            <ul>
                @if ($searchResults->count() > 0)
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a href="{{ route('cgmdev.movieapp.show', $result['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex item-center">
                                @if ($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92{{ $result['poster_path'] }}" class="w-8" alt="poster">
                                @else
                                    <img src="https://via.placeholder.com/50x70"  class="w-8" alt="placeholder">
                                @endif
                                <span class="ml-4">{{$result['title']}}</span>
                            </a>
                        </li>
                    @endforeach
                @else
                        <div class="px-3 py-3">
                            No Results Found for "{{ $search }}"
                        </div>
                @endif
            </ul>
        </div>
    @endif
</div>
