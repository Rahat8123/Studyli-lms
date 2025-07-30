<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo e(asset('backend/assets/images/favicon-32x32.png')); ?>" type="image/png" />
    <!--plugins-->
    <link href="<?php echo e(asset('backend/assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo e(asset('backend/assets/css/pace.min.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('backend/assets/js/pace.min.js')); ?>"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/bootstrap-extended.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/icons.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background:
                linear-gradient(135deg, rgba(34, 197, 94, 0.9) 0%, rgba(16, 185, 129, 0.9) 100%),
                url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80') center/cover no-repeat;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            max-width: 1100px;
            width: 100%;
            min-height: 600px;
            display: flex;
        }

        .login-left {
            flex: 1;
            background:
                linear-gradient(135deg, rgba(34, 197, 94, 0.95) 0%, rgba(16, 185, 129, 0.95) 50%, rgba(5, 150, 105, 0.95) 100%),
                url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.15"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.15"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }

        .login-illustration {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        .login-illustration h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .login-illustration p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float-shapes 15s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 15%;
            animation-delay: -5s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: -10s;
        }

        @keyframes float-shapes {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .login-right {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .logo-container {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #22c55e 0%, #10b981 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            box-shadow: 0 10px 25px rgba(34, 197, 94, 0.3);
        }

        .login-header h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }

        .login-header p {
            color: #6b7280;
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 12px 16px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f9fafb;
        }

        .form-control:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
            background: white;
        }

        .form-control.is-invalid {
            border-color: #ef4444;
        }

        .input-group {
            position: relative;
        }

        .input-group-text {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            cursor: pointer;
            z-index: 10;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .input-group-text:hover {
            background: rgba(34, 197, 94, 0.1);
        }

        .password-input {
            padding-right: 50px !important;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .form-check {
            display: flex;
            align-items: center;
        }

        .form-check-input {
            margin-right: 0.5rem;
        }

        .form-check-label {
            font-size: 0.9rem;
            color: #6b7280;
        }

        .forgot-link {
            color: #22c55e;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: #16a34a;
        }

        .btn-primary {
            background: linear-gradient(135deg, #22c55e 0%, #10b981 100%);
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(34, 197, 94, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(34, 197, 94, 0.4);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: #9ca3af;
            font-size: 0.9rem;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e5e7eb;
        }

        .divider span {
            padding: 0 1rem;
        }

        .social-login {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .social-btn {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .social-btn.facebook { background: #1877f2; }
        .social-btn.twitter { background: #1da1f2; }
        .social-btn.google { background: #ea4335; }
        .social-btn.linkedin { background: #0077b5; }

        .signup-link {
            text-align: center;
            color: #6b7280;
            font-size: 0.9rem;
        }

        .signup-link a {
            color: #22c55e;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            color: #16a34a;
        }

        .text-danger {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                margin: 10px;
                border-radius: 20px;
            }

            .login-left {
                min-height: 200px;
                flex: none;
            }

            .login-right {
                padding: 40px 30px;
            }

            .login-illustration h2 {
                font-size: 1.8rem;
            }
        }
    </style>

    <title>Instructor Login</title>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-container">
            <!-- Left Side - Illustration -->
            <div class="login-left d-none d-md-flex">
                <div class="floating-shapes">
                    <div class="shape"></div>
                    <div class="shape"></div>
                    <div class="shape"></div>
                </div>
                <div class="login-illustration">
                    <h2>Instructor Portal</h2>
                    <p>Share knowledge, inspire minds, and shape the future of learning</p>
                    <div style="font-size: 4rem; margin-top: 2rem;">
                        👩‍🏫
                    </div>
                    <div style="margin-top: 1rem; font-size: 0.9rem; opacity: 0.8;">
                        <div style="display: flex; justify-content: center; gap: 2rem; margin-top: 2rem;">
                            <div style="text-align: center;">
                                <div style="font-size: 2rem;">📚</div>
                                <div style="margin-top: 0.5rem; font-size: 0.8rem;">Courses</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: 2rem;">🎯</div>
                                <div style="margin-top: 0.5rem; font-size: 0.8rem;">Goals</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: 2rem;">💡</div>
                                <div style="margin-top: 0.5rem; font-size: 0.8rem;">Innovation</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="login-right">
                <div class="login-header">
                    <div class="logo-container">
                        <img src="<?php echo e(asset('backend/assets/images/logo-icon.png')); ?>" width="40" alt="Logo" style="filter: brightness(0) invert(1);">
                    </div>
                    <h1>Instructor Login</h1>
                    <p>Please log in to your account</p>
                </div>

                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email"
                               id="email"
                               name="email"
                               class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="Enter your email"
                               value="<?php echo e(old('email')); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password"
                                   name="password"
                                   id="password"
                                   class="form-control password-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   placeholder="Enter your password">
                            <a href="javascript:;" class="input-group-text">
                                <i class="bx bx-hide"></i>
                            </a>
                        </div>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="remember-forgot">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">
                                Remember Me
                            </label>
                        </div>
                        <a href="authentication-forgot-password.html" class="forgot-link">Forgot Password?</a>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>

                <div class="divider">
                    <span>OR SIGN IN WITH</span>
                </div>

                <div class="social-login">
                    <a href="javascript:;" class="social-btn facebook">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="javascript:;" class="social-btn twitter">
                        <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="javascript:;" class="social-btn google">
                        <i class="bx bxl-google"></i>
                    </a>
                    <a href="javascript:;" class="social-btn linkedin">
                        <i class="bx bxl-linkedin"></i>
                    </a>
                </div>

                <div class="signup-link">
                    Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?php echo e(asset('backend/assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <!--plugins-->
    <script src="<?php echo e(asset('backend/assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>

    <!--Password show & hide js -->
    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="<?php echo e(asset('backend/assets/js/app.js')); ?>"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        <?php if(Session::has('message')): ?>
        var type = "<?php echo e(Session::get('alert-type','info')); ?>"
        switch(type){
            case 'info':
            toastr.info(" <?php echo e(Session::get('message')); ?> ");
            break;

            case 'success':
            toastr.success(" <?php echo e(Session::get('message')); ?> ");
            break;

            case 'warning':
            toastr.warning(" <?php echo e(Session::get('message')); ?> ");
            break;

            case 'error':
            toastr.error(" <?php echo e(Session::get('message')); ?> ");
            break;
        }
        <?php endif; ?>
    </script>
</body>

</html>
<?php /**PATH D:\learning management system\Studyli-lms\resources\views/instructor/instructor_login.blade.php ENDPATH**/ ?>