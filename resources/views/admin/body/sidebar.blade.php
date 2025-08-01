<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Admin Sidebar</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar-wrapper {
            width: 260px;
            height: 100vh;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
            z-index: 1000;
            box-shadow: 2px 0 20px rgba(0, 0, 0, 0.1);
            border-right: 1px solid rgba(0, 0, 0, 0.05);
        }

        .sidebar-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.02);
            backdrop-filter: blur(10px);
            pointer-events: none;
        }

        .sidebar-header {
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 2;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .logo-text {
            color: white;
            font-size: 24px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            background: linear-gradient(45deg, #fff, #e0e0e0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .toggle-icon {
            margin-left: auto;
            color: white;
            font-size: 20px;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .toggle-icon:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-3px);
        }

        .metismenu {
            list-style: none;
            padding: 15px 0;
            height: calc(100vh - 90px);
            overflow-y: auto;
            position: relative;
            z-index: 2;
        }

        .metismenu::-webkit-scrollbar {
            width: 4px;
        }

        .metismenu::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
        }

        .metismenu::-webkit-scrollbar-thumb {
            background: rgba(102, 126, 234, 0.3);
            border-radius: 2px;
        }

        .menu-label {
            color: #6c757d;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 20px 25px 10px;
            margin-top: 15px;
        }

        .metismenu li {
            margin: 1px 10px;
        }

        .metismenu > li > a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #495057;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin: 2px 0;
        }

        .metismenu > li > a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .metismenu > li > a:hover::before {
            left: 100%;
        }

        .metismenu > li > a:hover {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(116, 75, 162, 0.1));
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.15);
            color: #495057;
        }

        .parent-icon {
            width: 20px;
            height: 20px;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .menu-title {
            font-weight: 500;
            font-size: 14px;
        }

        .has-arrow::after {
            content: '\ea5e';
            font-family: boxicons;
            margin-left: auto;
            transition: transform 0.3s ease;
        }

        .metismenu li ul {
            list-style: none;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 8px;
            margin-top: 5px;
            border: 1px solid rgba(102, 126, 234, 0.1);
        }

        .metismenu li:hover ul {
            max-height: 300px;
            padding: 10px 0;
        }

        .metismenu li:hover .has-arrow::after {
            transform: rotate(90deg);
        }

        .metismenu li ul li a {
            display: flex;
            align-items: center;
            padding: 8px 20px 8px 45px;
            color: #6c757d;
            text-decoration: none;
            font-size: 13px;
            border-radius: 8px;
            margin: 2px 10px;
            transition: all 0.3s ease;
        }

        .metismenu li ul li a:hover {
            background: rgba(102, 126, 234, 0.1);
            color: #495057;
            transform: translateX(5px);
        }

        .metismenu li ul li a i {
            margin-right: 10px;
            font-size: 12px;
            opacity: 0.7;
        }

        /* Animated background particles */
        .sidebar-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                radial-gradient(circle at 20% 20%, rgba(102, 126, 234, 0.05) 1px, transparent 1px),
                radial-gradient(circle at 80% 80%, rgba(116, 75, 162, 0.05) 1px, transparent 1px),
                radial-gradient(circle at 40% 60%, rgba(102, 126, 234, 0.03) 1px, transparent 1px);
            background-size: 50px 50px, 80px 80px, 60px 60px;
            animation: float 20s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Hover effects for main menu items */
        .metismenu > li:nth-child(2) > a:hover {
            background: linear-gradient(45deg, rgba(255, 107, 107, 0.1), rgba(78, 205, 196, 0.1));
            box-shadow: 0 4px 12px rgba(255, 107, 107, 0.2);
        }
        .metismenu > li:nth-child(4) > a:hover {
            background: linear-gradient(45deg, rgba(116, 75, 162, 0.1), rgba(102, 126, 234, 0.1));
            box-shadow: 0 4px 12px rgba(116, 75, 162, 0.2);
        }
        .metismenu > li:nth-child(5) > a:hover {
            background: linear-gradient(45deg, rgba(255, 154, 0, 0.1), rgba(255, 206, 84, 0.1));
            box-shadow: 0 4px 12px rgba(255, 154, 0, 0.2);
        }
        .metismenu > li:nth-child(6) > a:hover {
            background: linear-gradient(45deg, rgba(233, 30, 99, 0.1), rgba(156, 39, 176, 0.1));
            box-shadow: 0 4px 12px rgba(233, 30, 99, 0.2);
        }

        /* Active state */
        .metismenu > li > a.active {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.15), rgba(116, 75, 162, 0.15));
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.2);
            color: #495057;
            border-left: 4px solid #667eea;
        }

    </style>
</head>
<body>
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <div class="logo-icon">
                    <i class='bx bx-shield-quarter'></i>
                </div>
            </div>
            <div>
                <h4 class="logo-text">Admin</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i></div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">

            <li>
                <a href="{{  route('admin.dashboard') }}" class="active">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <li class="menu-label">UI Elements</li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-cart'></i></div>
                    <div class="menu-title">Manage Category</div>
                </a>
                <ul>
                    <li> <a href="{{ route('all.category') }}"><i class='bx bx-radio-circle'></i>All Category </a></li>
                    <li> <a href="{{ route('all.subcategory') }}"><i class='bx bx-radio-circle'></i>All SubCategory  </a>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                    <div class="menu-title">Manage Instructor</div>
                </a>
                <ul>
                    <li> <a href="{{ route('all.instructor') }}"><i class='bx bx-radio-circle'></i>All Instructor</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                    <div class="menu-title">Manage Courses</div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>All Courses</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                    <div class="menu-title">Manage Coupon</div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>All Coupon</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                    <div class="menu-title">Manage Setting</div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Manage SMPT</a></li>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Site Setting </a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                    <div class="menu-title">Manage Orders</div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Pending Orders </a></li>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Confirm Orders </a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                    <div class="menu-title">Manage Report</div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Report View </a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                    <div class="menu-title">Manage Review</div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Pending Review </a></li>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Active Review </a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                    <div class="menu-title">Manage All User </div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>All User </a></li>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>All Instructor</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                    <div class="menu-title">Manage Blog </div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Blog Category </a></li>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Blog Post</a></li>
                </ul>
            </li>

            <li class="menu-label">Charts & Maps</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-line-chart"></i></div>
                    <div class="menu-title">Charts</div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Apex</a></li>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Chartjs</a></li>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Highcharts</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-map-alt"></i></div>
                    <div class="menu-title">Maps</div>
                </a>
                <ul>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Google Maps</a></li>
                    <li> <a href="#"><i class='bx bx-radio-circle'></i>Vector Maps</a></li>
                </ul>
            </li>

            <li>
                <a href="#" target="_blank">
                    <div class="parent-icon"><i class="bx bx-support"></i></div>
                    <div class="menu-title">Support</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>

    <script>
        // Add some interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.metismenu > li > a');

            menuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    if (this.classList.contains('has-arrow')) {
                        e.preventDefault();
                    }

                    // Remove active class from all items
                    menuItems.forEach(i => i.classList.remove('active'));

                    // Add active class to clicked item
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>
</html>
