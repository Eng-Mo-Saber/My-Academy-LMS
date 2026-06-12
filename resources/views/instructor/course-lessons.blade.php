@extends('layout.app')

@section('title', 'إدارة دروس الدورة')


@section('content')
    <div class="main-content p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-0">دروس دورة: <span class="text-primary">Laravel Basics</span></h3>
                <p class="text-muted">يمكنك تعديل أسماء الدروس أو تغيير
                    الفيديوهات أو حذفها.</p>
            </div>
            <a href="{{ route('instructor_manage_courses') }}" class="btn btn-outline-secondary">عودة</a>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="bg-white">
                        <tr>
                            <th class="p-3 text-center" style="width: 80px;">الترتيب</th>
                            <th class="p-3">اسم الدرس</th>
                            <th class="p-3 text-center">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center fw-bold text-muted">1</td>
                            <td>مقدمة عن المسارات (Routing)</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal"
                                    data-bs-target="#editLessonModal">
                                    <i class="bi bi-pencil-square"></i>
                                    تعديل
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="confirmDeleteLesson()">
                                    <i class="bi bi-trash"></i> حذف
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold text-muted">2</td>
                            <td>التعامل مع الـ Controllers</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal"
                                    data-bs-target="#editLessonModal">
                                    <i class="bi bi-pencil-square"></i>
                                    تعديل
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="confirmDeleteLesson()">
                                    <i class="bi bi-trash"></i> حذف
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editLessonModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold">تعديل بيانات الدرس</h5>
                    <button type="button" class="btn-close btn-close-white ms-0" data-bs-dismiss="modal"></button>
                </div>
                <form id="editLessonForm">
                    <div class="modal-body p-4">
                        <div class="mb-3 text-end">
                            <label class="form-label fw-bold">اسم الدرس
                                الجديد</label>
                            <input type="text" class="form-control" value="مقدمة عن المسارات (Routing)" required>
                        </div>

                        <div class="mb-3 text-end text-right">
                            <label class="form-label fw-bold">تحديث الفيديو
                                (اختياري)</label>
                            <input type="file" class="form-control" accept="video/*">
                            <small class="text-muted mt-2 d-block">اترك
                                الحقل فارغاً إذا كنت لا تريد تغيير الفيديو
                                الحالي.</small>
                        </div>
                    </div>
                    <div class="modal-footer border-0 p-3">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-primary px-4">تحديث
                            البيانات</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // دالة بسيطة للتأكيد قبل الحذف
        function confirmDeleteLesson() {
            if (confirm('هل أنت متأكد من حذف هذا الدرس نهائياً؟')) {
                alert('تم حذف الدرس بنجاح');
            }
        }
    </script>
@endsection
