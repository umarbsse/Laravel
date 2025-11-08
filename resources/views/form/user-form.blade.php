
<style>

 input{       border: 1px solid orange;
    width: 400px;
    padding: 10px;
    margin-bottom: 10px;
}
</style>
<div>
    <h1>Add new user</h1>
    {{-- @if($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                {{$error}}
            </div>
        @endforeach
    @endif --}}
    <form action="addUser" method="POST">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name"  name="username" value="{{old('username')}}"/>
            <span style="color: red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user email"  name="email" value="{{old('email')}}"/>
            <span style="color: red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user city"  name="city" value="{{old('city')}}"/>
            <span style="color: red;">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="checkbox"  name="skill[]" value="php" id="php"/>
            <lable for="php">PHP</lable>
            <input type="checkbox"  name="skill[]" value="node" id="node"/>
            <lable for="node">node</lable>
            <input type="checkbox"  name="skill[]" value="java" id="java"/>
            <lable for="java">java</lable>
        </div>
        <div class="input-wrapper">
            <input type="radio"  name="gender" value="male" id="male"/>
            <lable for="male">male</lable>
            <input type="radio"  name="gender" value="female" id="female"/>
            <lable for="female">female</lable>
        </div>
        <div class="input-wrapper">
            <select name="city_list">
                <option value="1">Isb</option>
                <option value="2">Wah</option>
                <option value="3">Rwp</option>
            </select>
        </div>
        <div class="input-wrapper">
            <button>
                Add New User
            </button>
        </div>
    </form>
</div>