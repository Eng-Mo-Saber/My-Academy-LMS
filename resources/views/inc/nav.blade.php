@guest
    
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ route('home_page') }}"><i class="bi bi-book-half"></i>
            أكاديميتي</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('home_page') }}">الرئيسية</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('course_page') }}">الدورات</a></li>
            </ul>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary" id="darkModeToggle"><i class="bi bi-moon"></i></button>
                <a href="{{ route('login_page') }}" class="btn btn-outline-primary">تسجيل الدخول</a>
                <a href="{{ route('register_page') }}" class="btn btn-primary">إنشاء حساب</a>
            </div>
        </div>
    </div>
</nav>
@endguest



