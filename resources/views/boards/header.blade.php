<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <span class="fs-4">{{ $toptitle }}</span>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
    @guest()
        <a href="{{route('auth.login')}}" class="text-xl">{{__('messages.login')}}</a> /
        <a href="{{route('auth.signup')}}" class="text-xl">{{__('messages.signup')}}</a>
    @endguest
    @auth()
        <form action="/logout" method="post" class="inline-block">
            @csrf
            <span class="text-xl text-blue-500">{{auth()->user()->userid}}</span> /
            <a href="/logout"><button class="text-xl">{{__('messages.logout')}}</button></a>
        </form>
    @endauth
    </nav>
</div>