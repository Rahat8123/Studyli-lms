<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Teacher LMS</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i></div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Course Management</li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-book'></i></div>
                <div class="menu-title">Courses</div>
            </a>
            <ul>
                <li><a href="all-courses.html"><i class='bx bx-radio-circle'></i>All Courses</a></li>
                <li><a href="create-course.html"><i class='bx bx-radio-circle'></i>Create Course</a></li>
            </ul>
        </li>

        <li>
            <a href="lessons.html">
                <div class="parent-icon"><i class='bx bx-slideshow'></i></div>
                <div class="menu-title">Lessons</div>
            </a>
        </li>

        <li>
            <a href="assignments.html">
                <div class="parent-icon"><i class='bx bx-edit'></i></div>
                <div class="menu-title">Assignments</div>
            </a>
        </li>

        <li>
            <a href="quizzes.html">
                <div class="parent-icon"><i class='bx bx-question-mark'></i></div>
                <div class="menu-title">Quizzes</div>
            </a>
        </li>

        <li class="menu-label">Student Interaction</li>

        <li>
            <a href="student-list.html">
                <div class="parent-icon"><i class='bx bx-group'></i></div>
                <div class="menu-title">Students</div>
            </a>
        </li>

        <li>
            <a href="messages.html">
                <div class="parent-icon"><i class='bx bx-message-detail'></i></div>
                <div class="menu-title">Messages</div>
            </a>
        </li>

        <li>
            <a href="grades.html">
                <div class="parent-icon"><i class='bx bx-bar-chart-alt-2'></i></div>
                <div class="menu-title">Grades</div>
            </a>
        </li>

        <li>
            <a href="counseling-requests.html">
                <div class="parent-icon"><i class='bx bx-user-voice'></i></div>
                <div class="menu-title">Counseling Requests</div>
            </a>
        </li>

        <li class="menu-label">Reports & Analytics</li>

        <li>
            <a href="attendance.html">
                <div class="parent-icon"><i class='bx bx-calendar-check'></i></div>
                <div class="menu-title">Attendance</div>
            </a>
        </li>

        <li>
            <a href="progress-reports.html">
                <div class="parent-icon"><i class='bx bx-pie-chart'></i></div>
                <div class="menu-title">Progress Reports</div>
            </a>
        </li>

        <li>
            <a href="certificates.html">
                <div class="parent-icon"><i class='bx bx-certification'></i></div>
                <div class="menu-title">Certificates</div>
            </a>
        </li>

        <li class="menu-label">Support & Settings</li>

        <li>
            <a href="profile-settings.html">
                <div class="parent-icon"><i class="bx bx-cog"></i></div>
                <div class="menu-title">Profile Settings</div>
            </a>
        </li>

        <li>
            <a href="support.html">
                <div class="parent-icon"><i class="bx bx-help-circle"></i></div>
                <div class="menu-title">Support</div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</div>
