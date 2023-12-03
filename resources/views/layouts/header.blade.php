<!-- resources/views/layouts/header.blade.php -->

<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<header>
        <div class="top-link">
            <a href="/index/{{ Auth::user()->id }}">TOP</a>
        </div>

        <div class="top-link">
            <a href="{{ route('posts.create') }}">投稿する</a>
        </div>

        <div class="top-link">
            <a href="{{ route('bookmarks') }}">お気に入り</a>
            
        </div>
    </div>

@auth
    <div class="user-info">
        <a href="{{ route('my-page.show') }}">{{ auth()->user()->name }}</a>
    </div>

    <div class="user-info">
        <a href="{{ route('logout') }}">ログアウト</a>
    </div>
    
    <div class="user-icon">
        @if(auth()->user()->image_path)
            <img src="{{ asset('storage/' . auth()->user()->image_path) }}" alt="User Icon">
        @endif
    </div>
@endauth

</header>
