@extends('layout.app')

@section('title','تم الدفع بنجاح - أكاديميتي' )


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow border-0 text-center p-5">
                    <div class="mb-4">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem;"></i>
                    </div>
                    <h2 class="fw-bold mb-3">تم الدفع بنجاح!</h2>
                    <p class="text-muted lead mb-4">شكراً لك! تم تأكيد اشتراكك في الدورة ويمكنك البدء في التعلم الآن.</p>
                    
                    <div class="bg-light p-3 rounded mb-4 text-start">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">رقم الطلب:</span>
                            <span class="fw-bold">#ORD-59483</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">طريقة الدفع:</span>
                            <span class="fw-bold">بطاقة ائتمان</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">المبلغ المدفوع:</span>
                            <span class="fw-bold text-primary">$49.99</span>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="../student/my-courses.html" class="btn btn-primary btn-lg px-4 gap-3"><i class="bi bi-play-circle me-2"></i> ابدأ التعلم</a>
                        <a href="{{ route('home_page') }}" class="btn btn-outline-secondary btn-lg px-4"><i class="bi bi-house me-2"></i> العودة للرئيسية</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection