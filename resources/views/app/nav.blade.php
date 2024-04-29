<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3" aria-label="Navbar">
    <div class="container-xl">
        <a class="navbar-brand fs-3" href="{{ route('home') }}">IT Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

{{--        <div class="collapse navbar-collapse" id="navbar">--}}
{{--            <ul class="navbar-nav me-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('home.index') }}">IT Academy</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}


        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto fs-5">
                <li class="nav-item ms-4 ">
                    <a class="nav-link" href="{{ route('students.index') }}">Student</a>
                </li>
                <li class="nav-item ms-4 ">
                    <a class="nav-link" href="{{ route('teachers.index') }}">Teacher</a>
                </li>
                <li class="nav-item ms-4">
                    <a class="nav-link" href="{{ route('posts.index') }}">Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
