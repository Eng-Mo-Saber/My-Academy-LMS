@auth

<div class="sidebar p-3 shadow-sm" id="sidebar">

    {{-- admin --}}
    @if(auth()->user()->role == 'admin')

    <h4 class="fw-bold text-primary text-center mb-4"><i class="bi bi-shield-lock"></i> الإدارة</h4>
    <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="{{ route('admin_dashboard') }}" class="nav-link text-dark"><i class="bi bi-speedometer2 me-2"></i> لوحة التحكم</a></li>
        <li class="nav-item mb-2"><a href="{{ route('admin_users') }}" class="nav-link text-dark"><i class="bi bi-people me-2"></i>
                إدارة
                المستخدمين</a></li>
        <li class="nav-item mb-2"><a href="{{ route('admin_categories') }}" class="nav-link text-dark"><i class="bi bi-list-task me-2"></i> إدارة التصنيفات</a></li>
        <li class="nav-item mb-2"><a href="{{ route('admin_courses') }}" class="nav-link text-dark"><i class="bi bi-journal-text me-2"></i> إدارة الدورات</a></li>
        <li class="nav-item mb-2"><a href="{{ route('admin_orders') }}" class="nav-link text-dark"><i class="bi bi-cart me-2"></i>
                الطلبات</a></li>
    </ul>
    @endif

    {{-- student --}}
    @if (auth()->user()->role == 'student')

    <div class="sidebar-header text-center mb-4 border-bottom pb-3">
        <h4 class="fw-bold text-primary mb-0">
            <i class="bi bi-book-half"></i> أكاديميتي
        </h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="{{ route('student_dashboard') }}" class="nav-link text-dark"><i class="bi bi-people me-2"></i>لوحة
                التحكم</a></li>
        <li class="nav-item mb-2"><a href="{{ route('student_my_courses') }}" class="nav-link text-dark"><i class="bi bi-list-task me-2"></i> دوراتي</a></li>
        <li class="nav-item mb-2"><a href="{{ route('student_chat') }}" class="nav-link text-dark"><i class="bi bi-journal-text me-2"></i> الدردشة</a></li>
        <li class="nav-item mb-2"><a href="{{ route('student_profile') }}" class="nav-link text-dark"><i class="bi bi-cart me-2"></i> الملف
                الشخصي</a></li>
    </ul>
    @endif

    {{-- instructor --}}
    @if (auth()->user()->role == 'instructor')


    <div class="p-4 border-bottom text-center">
        <h5 class="fw-bold mb-0 text-primary">لوحة المدرب</h5>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="{{ route('instructor_dashboard') }}" class="nav-link text-dark"><i class="bi bi-list-task me-2"></i> لوحة المدرب</a></li>
        <li class="nav-item mb-2"><a href="{{ route('instructor_create_courses') }}" class="nav-link text-dark"><i class="bi bi-journal-text me-2"></i> إنشاء دورة</a></li>
        <li class="nav-item mb-2"><a href="{{ route('instructor_manage_courses') }}" class="nav-link text-dark"><i class="bi bi-cart me-2"></i> ادارة
                الدروس</a></li>
    </ul>
    @endif

    <hr>
    <form action="{{ route('logout') }}" method="POST" class="w-100 m-0">
        @csrf
        <button type="submit" class="btn btn-outline-danger w-100">
            <i class="bi bi-box-arrow-right me-2"></i> تسجيل خروج
        </button>
    </form>
</div>
@endauth
