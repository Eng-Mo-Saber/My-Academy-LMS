@extends('layout.app')

@section('title', 'تسجيل الدخول - أكاديميتي')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 p-4">
                    <div class="text-center mb-4">
                        <i class="bi bi-book-half fs-1 text-primary"></i>
                        <h3 class="fw-bold mt-2">تسجيل الدخول</h3>
                    </div>
                    <form class="needs-validation" novalidate action="../student/dashboard.html">
                        <div class="mb-3">
                            <label class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" required>
                            <div class="invalid-feedback">يرجى إدخال بريد إلكتروني صالح.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">كلمة المرور</label>
                            <input type="password" class="form-control" required>
                            <div class="invalid-feedback">يرجى إدخال كلمة المرور.</div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">تذكرني</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">تسجيل الدخول</button>
                        <div class="mt-3 text-center">
                            <p class="small text-muted">ليس لديك حساب؟ <a href="{{ route('register_page') }}">إنشاء حساب</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
