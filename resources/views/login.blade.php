<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <h1>Log In</h1>
    <form action="/login" method="POST">
        @csrf
        <div>
            <x-layout title="password" type="text" nombre="password"/>
            @error('password')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <x-layout title="email" type="text" nombre="email"/>
            @error('email')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Log In</button>
        </div>
    </form>
</div>

