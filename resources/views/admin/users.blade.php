@extends('layout.app')

@section('title' , 'إدارة المستخدمين - لوحة التحكم')

@section('content')
<div class="main-content">
    <nav class="navbar navbar-light bg-white border-bottom px-4 py-3 sticky-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <button class="btn btn-light d-lg-none" id="sidebarToggle"><i class="bi bi-list fs-4"></i></button>
            <h5 class="fw-bold mb-0">إدارة المستخدمين</h5>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal">
                    <i class="bi bi-plus-lg"></i> إضافة مستخدم
                </button>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-4">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="بحث بالاسم أو البريد...">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option selected>كل الرتب</option>
                            <option>طالب</option>
                            <option>محاضر</option>
                            <option>مدير</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option selected>الحالة</option>
                            <option>نشط</option>
                            <option>غير نشط</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-secondary w-100">تصفية</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- عرض مسج نجاح تسجيل البيانات --}}
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        {{-- عرض الاخطاء --}}
        @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="px-4">المستخدم</th>
                                <th>الرتبة</th>
                                <th>تاريخ التسجيل</th>
                                <th>الحالة</th>
                                <th class="text-center">إجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                                
                            <tr>
                                <td class="px-4">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="mb-0 fw-bold small">{{ $user->name }}</h6>
                                            <small class="text-muted">{{ $user->email }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-info-subtle text-info px-3">{{ $user->role }}</span></td>
                                <td><small>{{ $user->created_at }}</small></td>
                                <td><span class="badge bg-success-subtle text-success">{{ $user->status }}</span></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-primary" title="تعديل" data-bs-toggle="modal" data-bs-target="#editUserModal"><i class="bi bi-pencil"></i></button>
                                        
                                        <form action="{{ route('delete_users' , $user->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من رغبتك في حذف هذا المستخدم نهائياً؟');" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="حذف نهائي"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ==================== نافذة إضافة مستخدم جديد ==================== --}}
<div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0 shadow">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title fw-bold">إضافة مستخدم جديد</h5>
                <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addUserForm" action="{{ route('add_users') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-bold">الاسم الكامل</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">البريد الإلكتروني</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">الرتبة</label>
                        <select class="form-select" name="role">
                            <option value="student">طالب</option>
                            <option value="instructor">محاضر</option>
                            <option value="admin">مدير</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">كلمة المرور</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                <button type="submit" form="addUserForm" class="btn btn-primary">حفظ المستخدم</button>
            </div>
        </div>
    </div>
</div>


{{-- ==================== نافذة تعديل بيانات المستخدم (جديدة ومطابقة) ==================== --}}
<div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0 shadow">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title fw-bold">تعديل بيانات المستخدم</h5>
                <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editUserForm" action="{{ url('admin/users/update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label small fw-bold">الاسم الكامل</label>
                        <input type="text" class="form-control" name="name" id="edit_name" value="مو صابر" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">البريد الإلكتروني</label>
                        <input type="email" class="form-control" name="email" id="edit_email" value="mo@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">الرتبة</label>
                        <select class="form-select" name="role" id="edit_role">
                            <option value="student" selected>طالب</option>
                            <option value="instructor">محاضر</option>
                            <option value="admin">مدير</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">حالة الحساب</label>
                        <select class="form-select" name="status" id="edit_status">
                            <option value="active">نشط</option>
                            <option value="inactive">غير نشط</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">كلمة المرور الجديدة (اتركها فارغة لعدم التغيير)</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                <button type="submit" form="editUserForm" class="btn btn-primary">تحديث البيانات</button>
            </div>
        </div>
    </div>
</div>

<div id="toastContainer" class="toast-container position-fixed bottom-0 start-0 p-3"></div>
@endsection
