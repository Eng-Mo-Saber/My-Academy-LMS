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
                    <form class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label class="form-label">الاسم الكامل</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">كلمة المرور</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">إنشاء الحساب</button>
                        <div class="mt-3 text-center">
                            <p class="small text-muted">لديك حساب بالفعل؟ <a href="{{ route('login_page') }}">تسجيل الدخول</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection