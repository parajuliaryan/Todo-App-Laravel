<style>
    .container{
        margin: 0 auto;
    }
    .todo-form{
        display: flex;
        justify-content: space-between;
        width: 30%;
        margin-top: 10px;
        padding: 5px;
    }

    .todo-form button{
        background-color: rgb(30, 101, 235);
        width: 120px;
        border-radius: 5px;
        color: white;        
    }
    .todo-item-container{
        display: flex;
        width: 30%;
        justify-content: space-between;
    }
    .todo-form input{
        width: 50%;
    }
    .todo-item-container{
        background-color: rgb(212, 204, 204);
        color: white;
        border-radius: 5px;
        margin-bottom: 10px;
        padding: 5px;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <form class="todo-form" action="/dashboard" method="post">
            @csrf
            <input type="text" name="todos" placeholder="Enter your todo here">
            <button type="submit">Add</button>
        </form>
        <div class="todo-wrapper">
              @foreach ($todoValues as $todoValue)
                <div class="todo-item-container">
                <div class="todo-item">{{ $todoValue->todos }}</div>
                <form action="/dashboard/{{ $todoValue->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="delete-button" type="submit">Delete</button>
                </form>
                </div>    
              @endforeach         
        </div>
    </div>
</x-app-layout>
