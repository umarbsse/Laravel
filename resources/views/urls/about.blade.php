<div>
    <h1>URLS About PAGE</h1>
    <h3>{{URL::current()}}</h3>
    <h3>{{URL::full()}}</h3> 
    <h3>{{url()->current()}}</h3> 
    <h3>{{url()->full()}}</h3>
    <h3>USername is : {{ $name }}</h3>

    <a href="{{URL::to('url_home')}}">Home page</a> <br/>
    <a href="{{URL::to('url_about')}}">About page</a> <br/>
    <a href="{{URL::previous()}}">Previous page</a> <br/>
    <a href="{{URL::to('url_about',['umer'])}}">About page Umer</a> <br/>
</div>
