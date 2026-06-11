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

{{-- instructor --}}


{{-- <div class="sidebar shadow-sm" id="sidebar">
    <div class="p-4 border-bottom text-center">
        <h5 class="fw-bold mb-0 text-primary">لوحة المدرب</h5>
    </div>
    <div class="p-3">
        <ul class="nav flex-column" id="sidebarNav">
            <li class="nav-item mb-2"><a href="dashboard.html"
                    class="nav-link text-dark"><i
                        class="bi bi-grid-1x2 me-2"></i>
                    الإحصائيات</a></li>
            <li class="nav-item mb-2"><a href="create-course.html"
                    class="nav-link text-dark"><i
                        class="bi bi-plus-square me-2"></i> إنشاء
                    دورة</a></li>
            <li class="nav-item mb-2"><a href="manage-lessons.html"
                    class="nav-link text-dark"><i
                        class="bi bi-play-btn me-2"></i> إدارة
                    الدروس</a></li>
        </ul>
    </div>
</div> --}}
