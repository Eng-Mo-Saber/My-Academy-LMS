@extends('layout.app')

@section('title','إنشاء حساب - أكاديميتي' )


@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0 p-4">
                <div class="text-center mb-4">
                    <i class="bi bi-person-plus fs-1 text-primary"></i>
                    <h3 class="fw-bold mt-2">إنشاء حساب جديد</h3>
                </div>

                @if ($errors->any())

                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                @endif


                <form action="{{ route('register_store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">الاسم الكامل</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">البريد الإلكتروني</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">رقم الهاتف</label>
                        <input type="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">كلمة المرور</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">تأكيد كلمة المرور</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">إنشاء الحساب</button>
                    <div class="divider my-4 small fw-bold">التسجيل باستخدام</div>
                    {{-- laravel socialite icon --}}
                    <div class="text-center mb-4 d-flex justify-content-center gap-3">
                        <a href="{{ route('auth_redirect','google') }}" class="social-icon-btn btn-google text-secondary" title="Google">
                            <i class="bi bi-google"></i>
                        </a>
                        <a href="{{route('auth_redirect', 'facebook')}}" class="social-icon-btn btn-facebook text-secondary" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="{{ route('auth_redirect','github') }}" class="social-icon-btn btn-github text-secondary" title="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>

                    <div class="mt-3 text-center">
                        <p class="small text-muted">لديك حساب بالفعل؟ <a href="{{ route('login_page') }}">تسجيل الدخول</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
