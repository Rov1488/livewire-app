<div class="w-5/12 mx-auto">

    <form wire:submit="add" class="flex items-center justify-between">
        <input type="text" wire:model.live..5ms="todo" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 focus:ring-opacity-75" placeholder="Add a new todo">

        <button type="submit" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">Add</button>
    </form>
    <p>Current todo: {{$todo}}</p>
    <ul>
        @foreach($todos as $todo)
            <li>{{$todo}}</li>
        @endforeach
    </ul>

</div>


