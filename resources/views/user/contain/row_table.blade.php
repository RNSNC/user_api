<tr id="{{ $user->id }}_tr">
    <th scope="row">{{ $user->id }}</th>
    <td class="username" id="{{ $user->id }}_username">{{ $user->username }}</td>
    <td class="email" id="{{ $user->id }}_email">{{ $user->email }}</td>
    <td>
        @isset($ajax)
            <span class="btn btn-sm btn-warning edit" id-data="{{ $user->id }}">Edit</span>
            <span class="btn btn-sm btn-danger delete" id-data="{{ $user->id }}">Delete</span>
        @else
            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
        @endisset
    </td>
</tr>
