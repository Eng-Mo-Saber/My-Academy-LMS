@extends('layout.app')

@section('title', 'تسجيل الدخول - أكاديميتي')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm border-0 p-4 mt-5">
                <div class="text-center mb-4">
                    <i class="bi bi-book-half fs-1 text-primary"></i>
                    <h3 class="fw-bold mt-2">تسجيل الدخول</h3>
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
                <form class="needs-validation" novalidate action="{{ route('login_store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">البريد الإلكتروني</label>
                        <input type="email" name="email" class="form-control" required>
                        <div class="invalid-feedback">يرجى إدخال بريد إلكتروني صالح.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">كلمة المرور</label>
                        <input type="password" name="password" class="form-control" required>
                        <div class="invalid-feedback">يرجى إدخال كلمة المرور.</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">تسجيل الدخول</button>
                    <div class="mt-3 text-center">
                        <p class="small text-muted">ليس لديك حساب؟ <a href="{{ route('register_page') }}">إنشاء حساب</a></p>
                    </div>
                </form>
                <div class="divider my-4 small fw-bold">الدخول باستخدام</div>

                <div class="text-center mb-4 d-flex justify-content-center gap-3">
                    <a href="{{ route('auth_redirect','google') }}" class="social-icon-btn btn-google text-secondary" title="Google">
                        <i class="bi bi-google"></i>
                    </a>
                    <a href="#" class="social-icon-btn btn-facebook text-secondary" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="{{ route('auth_redirect','github') }}" class="social-icon-btn btn-github text-secondary" title="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="#" class="social-icon-btn btn-linkedin text-secondary" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
