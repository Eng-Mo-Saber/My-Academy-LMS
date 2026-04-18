document.addEventListener('DOMContentLoaded', function () {
    // Sidebar Toggle
    const sidebarToggleBtn = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');

    if (sidebarToggleBtn && sidebar) {
        sidebarToggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('show');
        });
    }

    // Dark Mode Toggle
    const darkModeBtn = document.getElementById('darkModeToggle');
    const body = document.body;

    // Check local storage for dark mode preference
    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark-mode');
        if (darkModeBtn) darkModeBtn.innerHTML = '<i class="bi bi-sun"></i>';
    }

    if (darkModeBtn) {
        darkModeBtn.addEventListener('click', function () {
            body.classList.toggle('dark-mode');
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('darkMode', 'enabled');
                darkModeBtn.innerHTML = '<i class="bi bi-sun"></i>';
            } else {
                localStorage.setItem('darkMode', 'disabled');
                darkModeBtn.innerHTML = '<i class="bi bi-moon"></i>';
            }
        });
    }

    // Form Validation UI
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    // Initialize Tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
});

// Toast function
function showToast(message, type = 'success') {
    const toastContainer = document.getElementById('toastContainer');
    if (!toastContainer) return;

    const toastHTML = `
        <div class="toast align-items-center text-bg-${type} border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
            <div class="toast-body">${message}</div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
    `;
    toastContainer.insertAdjacentHTML('beforeend', toastHTML);
    const lastToast = toastContainer.lastElementChild;
    setTimeout(() => { lastToast.remove(); }, 3000);
}

function handleFormSubmit() {
    // إغلاق المودال وإظهار إشعار
    const modal = bootstrap.Modal.getInstance(document.getElementById('addUserModal'));
    modal.hide();
    showToast('تمت إضافة المستخدم بنجاح', 'success');
}

function confirmDelete() {
    if (confirm('هل أنت متأكد من حظر هذا المستخدم؟')) {
        showToast('تم حظر المستخدم مؤقتاً', 'danger');
    }
}

// دوال إدارة التصنيفات
document.getElementById('categoryForm')?.addEventListener('submit', function (e) {
    e.preventDefault();
    alert('تم حفظ التصنيف بنجاح');
});

function deleteItem() {
    if (confirm('هل أنت متأكد من حذف هذا العنصر؟')) {
        console.log('Item Deleted');
    }
}
// Image Preview Script
document.getElementById('uploadImage').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (event) {
            document.getElementById('profileImagePreview').setAttribute('src', event.target.result);
        }
        reader.readAsDataURL(file);
    }
});

// Form Submit Simulation
document.getElementById('profileForm').addEventListener('submit', function (e) {
    e.preventDefault();
    if (this.checkValidity()) {
        showToast('تم تحديث ملفك الشخصي بنجاح!', 'success');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    // 1. تحديد اللينك النشط تلقائياً بناءً على رابط الصفحة
    const currentPath = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('#sidebarNav .nav-link');

    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });

    // 2. تفعيل زرار الموبايل (لو موجود)
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });
    }
});

document.getElementById('addLessonForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const progressBarContainer = document.getElementById('uploadProgress');
    const progressBar = progressBarContainer.querySelector('.progress-bar');
    
    // إظهار شريط التحميل
    progressBarContainer.classList.remove('d-none');
    
    // محاكاة لعملية الرفع (لأن الرفع الحقيقي بيحتاج Backend)
    let width = 0;
    const interval = setInterval(function() {
        if (width >= 100) {
            clearInterval(interval);
            alert('تم رفع الدرس بنجاح!');
            location.reload(); // إعادة تحميل الصفحة
        } else {
            width += 10;
            progressBar.style.width = width + '%';
        }
    }, 200);
});

document.addEventListener('DOMContentLoaded', function() {
    // 1. عداد الوقت (20 دقيقة)
    let timeInMinutes = 20;
    let timeInSeconds = timeInMinutes * 60;
    const timerElement = document.getElementById('quizTimer');

    if (timerElement) {
        const countdown = setInterval(function() {
            let minutes = Math.floor(timeInSeconds / 60);
            let seconds = timeInSeconds % 60;

            // إضافة صفر لو الرقم أقل من 10
            seconds = seconds < 10 ? '0' + seconds : seconds;
            minutes = minutes < 10 ? '0' + minutes : minutes;

            timerElement.innerHTML = `${minutes}:${seconds}`;

            if (timeInSeconds <= 0) {
                clearInterval(countdown);
                alert("انتهى وقت الاختبار! سيتم تسليم الإجابات تلقائياً.");
                document.getElementById('quizForm').submit();
            } else {
                timeInSeconds--;
            }
        }, 1000);
    }

});