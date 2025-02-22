
<x-master title="Categories" >
@section('navbar')
@include('partials.siedbar')

@endsection
@section('main')


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-between  gap-y-8 pb-4 bg-white dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
        </div>
        <div class="relative mt-1">
            <a href="{{route('categorie.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <button>Add Categorie</button>
            </a>
           
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    Categories
                </th>
                <th scope="col" class="px-6 py-3">
                    Date create 
                </th>
                <th scope="col" class="px-6 py-3">
                    Date update
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $categorie)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$categorie->id}}
                </th>
                <td class="px-6 py-4">
                {{$categorie->name}}
                </td>
                <td class="px-6 py-4">
                {{$categorie->created_at}}
                </td>
                <td class="px-6 py-4">
                {{$categorie->updated_at}}
                </td>
                <td class="flex gap-x-4 px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form method="POST" action="{{route('categorie.destroy',$categorie)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="font-medium text-red-600 dark:text-red-500 hover:underline">

                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td><h2>not Categories</h2></td>
            </tr>
            
            @endforelse
        </tbody>
    </table>
    {{$categories->links()}}
</div>

@endsection
</x-master>