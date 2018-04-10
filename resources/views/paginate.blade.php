<div class="pagination">
    <div>
        @foreach($users as $user)
            <tr>
                <th>
                    {{$user->id}}
                </th>
                <th>
                    {{$user->username}}
                </th>
            </tr>
        @endforeach
    </div>
    <ul>
        <li class="previous {{ ($users->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $users->url(1) }}"><i class="chevron left icon">first</i></a>
        </li>
        @for ($i = 1; $i <= $users->lastPage(); $i++)
            <li class="{{ ($users->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $users->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="next {{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $users->url($users->currentPage()+1) }}">
                <i class="chevron right icon">last</i>
            </a>
        </li>
    </ul>
</div>