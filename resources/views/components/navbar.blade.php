<div class="navbar bg-base-100">
    <div class="flex-1">
        <a href="{{ route('post.index') }}" class="btn btn-ghost normal-case text-xl">ブログもどき</a>
    </div>
    <div class="flex-none gap-2">

        <div class="dropdown dropdown-end">
            <label tabindex="0" class=" btn btn-ghost btn-circle avatar">

                <div class="w-10 rounded-full">
                    {{-- <img src="https://placeimg.com/80/80/people" /> --}}
                    <img src="{{ Storage::url($user->image) }} " />
                </div>
            </label>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                <li>
                    <a class="">
                        Profile
                    </a>
                </li>
                <li><a href="{{ route('post.create') }}">投稿</a></li>
                <li><a href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </form>
            </ul>
        </div>
    </div>
</div>
