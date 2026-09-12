<h1><a href="{{ route('std.teacher', ['name' => 'MD Hemal Akhand', 'age' => 30]) }}">Teacher</a></h1>
<a href="{{ urL('std.teacher', ['name' => 'john']) }}">Teacher</a><br/><br/>
Current URL: {{ url()->current() }}<br/><br/>
Current Full URL: {{ url()->full() }}<br/><br/>
previous URL: {{ url()->previous() }}<br/><br/>