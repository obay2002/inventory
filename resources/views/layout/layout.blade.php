<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .navbar-custom {
            background-color: #282A39;
            display: flex;
            justify-content: flex-end; /* محاذاة العناصر إلى اليمين */
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: #F26322;
            margin-left: auto; /* جعل العنصر يذهب لليمين */
            text-decoration: none;
        }

        .navbar-brand img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            margin-left: 10px; /* تعديل المسافة بين الشعار والنص */
        }

        .navbar-text {
            color: #F26322;
            font-size: 24px;
            margin-left: 10px; /* تعديل المسافة بين الشعار والنص */
        }

        .container-fluid {
            display: flex;
            justify-content: flex-end; /* محاذاة العناصر إلى اليمين */
            align-items: center;
            height: 70px;
        }

        .footer {
            background-color: #282A39;
            color: #F26322;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .btn-custom {
            background-color: transparent;
            color: #000000;
            border: 1px solid transparent;
            font-size: 26px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-top: 27px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn-custom:hover {
            background-color: #F26322;
            color: #282A39;
        }

        .separator {
            border: 0;
            height: 1px;
            background-color: #D7D1AD;
            margin: 0;
        }

        .table-custom {
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-collapse: separate;
            border-radius: 8px;
        }

        .table-container {
            text-align: right;
            direction: rtl;
        }

        .test {
            display: flex;
            justify-content: flex-end;
            margin-top: 160px;
            margin-right: 33px;
        }

        .btn-custom-orange {
            background-color: #F26322;
            color: white;
            border: 1px solid #F26322;
        }

        .btn-custom-orange:hover {
            background-color: #e5531d;
        }

        .border-light {
            border: 2px solid #F26322; /* لون الإطار البرتقالي */
            border-radius: 5px; /* زوايا دائرية للإطار */
            padding: 4px; /* padding حول المحتوى */
            margin-bottom: 20px; /* مسافة أسفل المربع */
        }

        .page-link {
            color: #000000; /* لون النص الأساسي */
            border: 1px solid #f58504; /* لون الإطار الأساسي */
            border-radius: 5px; /* زوايا دائرية للإطار */
            margin: 0 2px; /* مسافة بين الأزرار */
        }

        .page-link:hover {
            background-color: #F26322; /* لون الخلفية عند التحويم */
            color: white; /* لون النص عند التحويم */
            border-color: #F26322; /* لون الإطار عند التحويم */
        }

        .page-link:active {
            background-color: #F26322; /* لون الخلفية عند الضغط */
            color: white; /* لون النص عند الضغط */
            border-color: #F26322; /* لون الإطار عند الضغط */
        }

        .text-right {
            margin-top: -34px;
            text-align: right;
            margin-top: 3px; /*مسافة بين الزر والنص*/
            font-family: ;
            }
            .button-container {
            /* text-align: right; محاذاة النص إلى اليمين */
            display: flex;
            justify-content: flex-end; /* محاذاة الأزرار إلى اليمين */
            padding-right: 20px; /* إضافة مسافة بين الأزرار والحافة اليمنى */
        }

        .button-container22 {
            /* text-align: right; محاذاة النص إلى اليمين */
            display: flex;
            justify-content: flex-end; /* محاذاة الأزرار إلى اليمين */
            padding-right: 130px; /* إضافة مسافة بين الأزرار والحافة اليمنى */
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="navbar-text">نظام ادارة مخزن مركز الحاسبة الالكترونية</div>
                <img src="{{ asset('images/20191222_064023_250.png') }}" alt="Logo">
            </a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="button-container">
            {{-- <a class="btn btn-custom" href="{{route('personalConvenant')}}">receivingDocument</a> --}}
            
            <button class="btn btn-custom">الكشف الشهري</button>
            <a class="btn btn-custom" href="{{route('internalTransfer')}}">المناقلة</a>            
            <a class="btn btn-custom" href="{{route('personalConvenant')}}">العهدة الشخصية</a>

            <button class="btn btn-custom" >المستندات</button>
        </div>
    </div>

    <div class="separator"></div>

<div class="button-container22">
    {{-- <button class="btn btn-custom" >مستند استلام</button> --}}
    <a class="btn btn-custom" href="{{route('receivingDocument')}}">مستند الاستلام</a>
    <a class="btn btn-custom" href="{{route('exchangeDocument')}}">مستند الصرف</a>
</div>

    <div class="separator"></div>

    @yield('Receiving')
    @yield('main')
    @yield('Exchange')
    @yield('PersonalConvenant')
    @yield('internal')
    
    {{-- footer --}}
    <footer class="footer">
        © 2023 University of Mosul. All Rights Reserved.
    </footer>

    {{-- سكربت لجعل footer يظهر فقط عند الوصول لاسفل الصفحة --}}
    <script>
        window.onscroll = function() {
            var footer = document.querySelector('.footer');
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
                footer.style.display = 'block';
            } else {
                footer.style.display = 'none';
            }
        };
    </script>

</body>
</html>
