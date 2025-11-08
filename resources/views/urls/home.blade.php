<div>
    <h1>URLS HOME PAGE</h1>
    <h3>{{URL::current()}}</h3>
    <h3>{{URL::full()}}</h3> 
    <h3>{{url()->current()}}</h3> 
    <h3>{{url()->full()}}</h3>

    <a href="{{URL::to('url_home')}}">Home page</a> <br/>
    <a href="{{URL::to('url_about')}}">About page</a> <br/>
    <a href="{{URL::previous()}}">Previous page</a>
</div>
