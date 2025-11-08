@include('widgets.header')
    <div>
        {{$body}}
        <ul>
            @foreach ($user_list as $user)
                @if($user == "Umer")
                    <li>This is {{$user}} Shahzad</li>
                @else
                    <li>{{$user}}</li>
                @endif
            @endforeach
        </ul>
        <x-message_banner msg="User logined success" class="success" /> <br>
        <x-message_banner msg="Auth Failed" class="error" /> <br>
        <x-message_banner msg="Weak Password" class="warning" />


        <a href="{{route('hm')}}">Named route home page</a>
    </div>
@include('widgets.footer')
