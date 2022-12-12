<h1 class="text-center">Listagem de usuário.</h1>

<ul>
    @foreach($users as $user)
        <li>
            {{ $user->name }} -
            {{ $user->email }}
        </li>
    @endforeach
</ul>
