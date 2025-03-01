
<x-master :title="($isUpdate?'update':'Create').' categorie'" >
@section('main')



<h1>Add categorie</h1>
 @if($errors->any())
 @foreach ($errors->all() as $item)
    
                <li class="list-group-item">{{$item}}</li>
                @endforeach
  @endif

  @php
  $route= route('categorie.store');
  if ($isUpdate) {
   $route= route('categorie.update',$categorie);
  }
@endphp
<form class="max-w-sm mx-auto" action="{{$route}}" method="post">
    @csrf
    @if ($isUpdate)
    @method('PUT')
        
    @endif
  <div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name categorie</label>
    <input type="text" value="{{old('name',$categorie->name)}}" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{$isUpdate?'update':'Add'}}</button>
</form>

@endsection
</x-master>