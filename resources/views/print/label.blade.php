<head>
    @include('layout.style')
    <style>
        /* fieldset {
            min-width: auto !important;
            padding: auto !important;
            margin: auto !important;
            border: 1px !important;
        }
    
        legend {
            width: auto !important;
            padding: auto  !important;
            margin-bottom: auto !important;
        } */
        * {
            text-transform: capitalize !important;
            font-family: 'Times New Roman', Times, serif !important;
        }

        legend {
            color: black !important;
        }

        .form-group {
            padding: 0px !important;
        }


        .form-check label,
        .form-group label {
            margin-bottom: 0px !important;
            color: rgb(0, 0, 0) !important;
        }

        .main-panel>.container {
            background-color: rgb(255, 255, 255) !important;
        }

        .form-group input,
        textarea {
            background: transparent !important;
            border: none !important;
            font-size: 17px;
            font-weight: 1000;
            text-align: center !important;
        }



        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            position: relative;
            background-color: white;
        }

        fieldset {
            border: 1px solid;
        }

        .back-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 12px;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .back-button:hover {
            background-color: #45a049;
        }

        .print-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .print-button:hover {
            background-color: #45a049;
        }

        .page-inner {
            width: 100%;
            height: calc(100% - 10px);
            /* Adjust the height to accommodate the back button */
        }

        .box {
            padding: 4px;
            border: 1px solid;
            border-bottom: 5px solid;
            border-right: 5px solid;
        }

        .box2 {
            border: 5px solid;
            padding: 4px;
        }

        label {
            font-size: 16px !important;
            font-weight: 500;
        }

        .border {
            border: 0.5px solid !important;
        }

        .bottom-border-parent>input {
            border-bottom: 1px solid !important;
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
        }

        .type input {
            text-align: left !important;
            font-style: italic !important;
            font-weight: light !important;
            font-size: 15px !important;
        }

        .page-inner {
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .gen-info .col-sm-8>input {
            border-bottom: 2px solid !important;
            border-bottom-right-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
            text-align: start !important;
        }
    </style>
<!-- FontAwesome 6.2.0 CSS -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>

<!-- (Optional) Use CSS or JS implementation -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>


</head>
<!-- <button onclick="printDiv()" class="print-button">Print PDF</button> -->

<div class="page-inner">

    <div class="m-5 mx-5 px-5">
        <h4>TO,</h4>
        <br>
        <div class="row justify-content-around">
            <h3 class="col-8">{{ $customer->name }}</h3>
        </div>
        <div class="d-flex justify-content-around">
            <h3 class="col-8">{!! str_replace(',', '<br>', $customer->address) !!}</h3>
        </div>
        {{-- <div class="d-flex justify-content-around">
            <h3 class="col-8">{{ $data['date'] }}</h3>
        </div> --}}
        {{-- <div class="d-flex justify-content-between">
            <h3>Due Date:</h3>
            <h3>{{ $data['due_date'] }}</h3>
        </div> --}}
        <footer style="border-top: 2px solid; margin-top: 7px;">
            <div class="d-flex justify-content-between">
                <img src="{{ asset('assets/img/logo.jpg') }}" width="350px" class="img-fluid" alt="LOGO">
                <div class="my-5">
                    <h4><b>343 Cheetham Hill Road, Manchester United Kingdom M8 0SF.</b></h4>
                    <br>
                    <div class="d-flex justify-content-around">
                        <h4><i class="fa-solid fa-mobile-screen-button"></i>
                            <b>07341559166</b>
                        </h4>
                        <h4><i class="fa-solid fa-phone mx-2"></i><b>08001615466</b></h4>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>