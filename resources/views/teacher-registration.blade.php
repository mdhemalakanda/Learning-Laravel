<form action={{ route('teacher.create-teacher-acc') }} method="POST">
    @csrf
    <input placeholder="username" name="username" />
    <input placeholder="password" name="password" />
    <input type="submit" name="register_teacher" value="Register" />
</form>