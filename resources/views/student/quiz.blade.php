@extends('layout.app')

@section('title' , 'الاختبار - منصة التعليم')

@section('content')
        <div class="main-content">
        <div class="p-3 mb-4 sticky-quiz-header shadow-sm">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fw-bold mb-0 text-primary">اختبار أساسيات Laravel</h4>
                        <span class="text-muted small">المسار: Backend Development</span>
                    </div>
                    <div class="text-center bg-dark text-white p-2 rounded px-4">
                        <div class="small fw-light">الوقت المتبقي</div>
                        <div id="quizTimer" class="h5 fw-bold mb-0 text-warning">20:00</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-4">
            <form id="quizForm">
                
                <div class="card shadow-sm border-0 p-4 mb-4">
                    <div class="d-flex mb-3 align-items-start">
                        <span class="badge bg-primary fs-6 me-3">1</span>
                        <h5 class="fw-bold mb-0 lh-base">ما هي الوظيفة الأساسية للـ Middleware في Laravel؟</h5>
                    </div>
                    
                    <div class="quiz-options ms-md-5">
                        <div class="form-check p-3 border rounded mb-2 shadow-sm">
                            <input class="form-check-input ms-2" type="radio" name="q1" id="q1_a" value="a" >
                            <label class="form-check-label d-block w-100" for="q1_a">فحص وتصفية طلبات HTTP القادمة للتطبيق.</label>
                        </div>
                        <div class="form-check p-3 border rounded mb-2 shadow-sm">
                            <input class="form-check-input ms-2" type="radio" name="q1" id="q1_b" value="b">
                            <label class="form-check-label d-block w-100" for="q1_b">التعامل مع قواعد البيانات مباشرة.</label>
                        </div>
                        <div class="form-check p-3 border rounded mb-2 shadow-sm">
                            <input class="form-check-input ms-2" type="radio" name="q1" id="q1_c" value="c">
                            <label class="form-check-label d-block w-100" for="q1_c">تصميم واجهات المستخدم (Blade Views).</label>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 p-4 mb-4">
                    <div class="d-flex mb-3 align-items-start">
                        <span class="badge bg-primary fs-6 me-3">2</span>
                        <h5 class="fw-bold mb-0 lh-base">أي من الأوامر التالية يستخدم لتنفيذ الـ Migrations؟</h5>
                    </div>
                    
                    <div class="quiz-options ms-md-5">
                        <div class="form-check p-3 border rounded mb-2 shadow-sm">
                            <input class="form-check-input ms-2" type="radio" name="q2" id="q2_a" value="a" >
                            <label class="form-check-label d-block w-100" for="q2_a">php artisan make:migrate</label>
                        </div>
                        <div class="form-check p-3 border rounded mb-2 shadow-sm">
                            <input class="form-check-input ms-2" type="radio" name="q2" id="q2_b" value="b">
                            <label class="form-check-label d-block w-100" for="q2_b">php artisan migrate</label>
                        </div>
                        <div class="form-check p-3 border rounded mb-2 shadow-sm">
                            <input class="form-check-input ms-2" type="radio" name="q2" id="q2_c" value="c">
                            <label class="form-check-label d-block w-100" for="q2_c">php artisan db:run</label>
                        </div>
                    </div>
                </div>

                <div class="text-center py-4">
                    <button type="submit" class="btn btn-primary btn-lg px-5 fw-bold shadow-lg rounded-pill">
                        <i class="bi bi-send-check me-2"></i> إنهاء الاختبار وتسليم الإجابات
                    </button>
                    <p class="text-muted mt-3 small">تأكد من مراجعة إجاباتك قبل التسليم.</p>
                </div>

            </form>
        </div>
    </div>
@endsection