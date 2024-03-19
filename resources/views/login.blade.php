<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <h1>Log In</h1>
    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Password</label>
            <input type="text" name="password">
        </div>
        <div>
            <button type="submit">Log In</button>
        </div>

    </form>
</div>
