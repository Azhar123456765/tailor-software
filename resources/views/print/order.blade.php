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
            font-size: 17px !important;
            font-weight: 600;
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
    <div class="row">
        <div class="col-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/img/logo.jpg') }}" width="350px" class="img-fluid" alt="LOGO">
        </div>

        <div class="col-6 my-3 gen-info">
            <fieldset>
                <div class="row justify-content-between my-2">
                    <div class="col-6">
                        <div class="form-group row justify-content-between">
                            <label for="customer" class="col-sm-2 col-form-label">Customer ID:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"
                                    value="{{ 'ANS' . str_pad($customer->id, 4, '0', STR_PAD_LEFT) }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        @if (isset($data['qty']))
                            <div class="form-group row">
                                <label for="qty" class="col-sm-2 col-form-label">Qty:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="qty" class="form-control" id="qty"
                                        value="{{ $data['qty'] }}" required>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                @if ($customer)
                    <div class="form-group row justify-content-between">
                        <label for="customer" class="col-sm-2 col-form-label">Customer Name:</label>
                        <div class="col-sm-8">
                            <input type="text" name="customer" class="form-control" id="customer"
                                value="{{ $customer->name }}">
                        </div>
                    </div>
                @endif
                @if ($customer)
                    <div class="form-group row justify-content-between">
                        <label for="phone_number" class="col-sm-2 col-form-label">Tel:</label>
                        <div class="col-sm-8">
                            <input type="text" name="phone_number" class="form-control" id="customer"
                                value="{{ $customer->phone_number }}">
                        </div>
                    </div>
                @endif
                <div class="row justify-content-between my-2">

                    <div class="col-6">
                        @if (isset($data['date']))
                            <div class="form-group row">
                                <label for="date" class="col-sm-2 col-form-label">date:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="date" class="form-control" id="date"
                                        value="{{ $data['date'] }}" required>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-6">
                        @if (isset($data['due_date']))
                            <div class="form-group row justify-content-between">
                                <label for="due_date" class="col-sm-2 col-form-label">Due Date:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="due_date" class="form-control" id="due_date"
                                        value="{{ $data['due_date'] }}">
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="col-6">
            <div class="row">
                @if (isset($data['kameez_type']))
                    <div class="col-md-12 mt-3">
                        <div class="box2 d-flex justify-content-between p-3">
                            <h4 class="text-uppercase">Mesurements Details:</h4>
                            <legend>{{ $data['kameez_type'] }}</legend>
                        </div>
                    </div>
                @endif
                <div class="col-md-6 my-3 kameez">

                    <fieldset>


                        {{-- @if (isset($data['kameez_type']))
                        <div class="form-group row justify-content-between">
                            <label for="kameez_type" class="col-sm-6 col-form-label border">Type:</label>
                            <div class="col-sm-6 border">
                                <input type="text" name="kameez_type" class="form-control" id="kameez_type"
                                    value="{{ $data['kameez_type'] }}">
                            </div>
                        </div>
                        @endif --}}
                        @if (isset($data['kameez_style']))
                            <div class="form-group row justify-content-between">
                                <label for="kameez_style" class="col-sm-6 col-form-label border">Style:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="kameez_style" class="form-control" id="kameez_style"
                                        value="{{ $data['kameez_style'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['length']))
                            <div class="form-group row justify-content-between">
                                <label for="length" class="col-sm-6 col-form-label border">Length:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="length" class="form-control" id="length"
                                        value="{{ $data['length'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['ghaira']))
                            <div class="form-group row justify-content-between">
                                <label for="ghaira" class="col-sm-6 col-form-label border">Ghaira:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="ghaira" class="form-control" id="ghaira"
                                        value="{{ $data['ghaira'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['shoulder']))
                            <div class="form-group row justify-content-between">
                                <label for="shoulder" class="col-sm-6 col-form-label border">Shoulder:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="shoulder" class="form-control" id="shoulder"
                                        value="{{ $data['shoulder'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['down_shoulder']))
                            <div class="form-group row justify-content-between">
                                <label for="down_shoulder" class="col-sm-6 col-form-label border">Down
                                    Shoulder:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="down_shoulder" class="form-control"
                                        id="down_shoulder" value="{{ $data['down_shoulder'] }}">
                                </div>
                            </div>
                        @endif
                        @if (isset($data['strap_shoulder']))
                            <div class="form-group row justify-content-between">
                                <label for="strap_shoulder" class="col-sm-6 col-form-label border">Strap
                                    Shoulder:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="strap_shoulder" class="form-control"
                                        id="strap_shoulder" value="{{ $data['strap_shoulder'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['neck']))
                            <div class="form-group row justify-content-between">
                                <label for="neck" class="col-sm-6 col-form-label border">Neck:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="neck" class="form-control" id="neck"
                                        value="{{ $data['neck'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['chest']))
                            <div class="form-group row justify-content-between">
                                <label for="chest" class="col-sm-6 col-form-label border">Chest:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="chest" class="form-control" id="chest"
                                        value="{{ $data['chest'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['upper_chest']))
                            <div class="form-group row justify-content-between">
                                <label for="upper_chest" class="col-sm-6 col-form-label border">Upper Chest:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="upper_chest" class="form-control" id="upper_chest"
                                        value="{{ $data['upper_chest'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['blouse_length']))
                            <div class="form-group row justify-content-between">
                                <label for="blouse_length" class="col-sm-6 col-form-label border">Blouse
                                    Length:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="blouse_length" class="form-control"
                                        id="blouse_length" value="{{ $data['blouse_length'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['upper_back']))
                            <div class="form-group row justify-content-between">
                                <label for="upper_back" class="col-sm-6 col-form-label border">Upper Back:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="upper_back" class="form-control" id="upper_back"
                                        value="{{ $data['upper_back'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['cross_back']))
                            <div class="form-group row justify-content-between">
                                <label for="cross_back" class="col-sm-6 col-form-label border">Cross Back:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="cross_back" class="form-control" id="cross_back"
                                        value="{{ $data['cross_back'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['waist']))
                            <div class="form-group row justify-content-between">
                                <label for="waist" class="col-sm-6 col-form-label border">Waist:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="waist" class="form-control" id="waist"
                                        value="{{ $data['waist'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['hip']))
                            <div class="form-group row justify-content-between">
                                <label for="hip" class="col-sm-6 col-form-label border">Hip:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="hip" class="form-control" id="hip"
                                        value="{{ $data['hip'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['fitting_seam']))
                            <div class="form-group row justify-content-between">
                                <label for="fitting_seam" class="col-sm-6 col-form-label border">Fitting Seam:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="fitting_seam" class="form-control" id="fitting_seam"
                                        value="{{ $data['fitting_seam'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['sleeve']))
                            <div class="form-group row justify-content-between">
                                <label for="sleeve" class="col-sm-6 col-form-label border">Sleeve:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="sleeve" class="form-control" id="sleeve"
                                        value="{{ $data['sleeve'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['bicep']))
                            <div class="form-group row justify-content-between">
                                <label for="bicep" class="col-sm-6 col-form-label border">Bicep:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="bicep" class="form-control" id="bicep"
                                        value="{{ $data['bicep'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['elbow']))
                            <div class="form-group row justify-content-between">
                                <label for="elbow" class="col-sm-6 col-form-label border">Elbow:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="elbow" class="form-control" id="elbow"
                                        value="{{ $data['elbow'] }}">
                                </div>
                            </div>
                        @endif
                        @if (isset($data['forearm']))
                            <div class="form-group row justify-content-between">
                                <label for="forearm" class="col-sm-6 col-form-label border">Forearm:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="forearm" class="form-control" id="forearm"
                                        value="{{ $data['forearm'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['armhole']))
                            <div class="form-group row justify-content-between">
                                <label for="armhole" class="col-sm-6 col-form-label border">Armhole:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="armhole" class="form-control" id="armhole"
                                        value="{{ $data['armhole'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['wrist_cuff']))
                            <div class="form-group row justify-content-between">
                                <label for="wrist_cuff" class="col-sm-6 col-form-label border">Wrist/Cuff:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="wrist_cuff" class="form-control" id="wrist_cuff"
                                        value="{{ $data['wrist_cuff'] }}">
                                </div>
                            </div>
                        @endif

                    </fieldset>

                </div>

                <div class="col-md-6 my-3 shalwar">

                    <fieldset>
                        {{-- @if (isset($data['shalwar_type']))
                        <div class="form-group row justify-content-between">
                            <label for="shalwar_type" class="col-sm-6 col-form-label border">Type:</label>
                            <div class="col-sm-6 border">
                                <input type="text" name="shalwar_type" class="form-control" id="shalwar_type"
                                    value="{{ $data['shalwar_type'] }}">
                            </div>
                        </div>
                        @endif --}}
                        @if (isset($data['shalwar_style']))
                            <div class="form-group row justify-content-between">
                                <label for="shalwar_style" class="col-sm-6 col-form-label border">Style:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="shalwar_style" class="form-control"
                                        id="shalwar_style" value="{{ $data['shalwar_style'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['length2']))
                            <div class="form-group row justify-content-between">
                                <label for="length2" class="col-sm-6 col-form-label border">Length:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="length2" class="form-control" id="length2"
                                        value="{{ $data['length2'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['west_belt']))
                            <div class="form-group row justify-content-between">
                                <label for="west_belt" class="col-sm-6 col-form-label border">West Belt:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="west_belt" class="form-control" id="west_belt"
                                        value="{{ $data['west_belt'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['hip']))
                            <div class="form-group row justify-content-between">
                                <label for="hip" class="col-sm-6 col-form-label border">Hip:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="hip" class="form-control" id="hip"
                                        value="{{ $data['hip'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['thigh']))
                            <div class="form-group row justify-content-between">
                                <label for="thigh" class="col-sm-6 col-form-label border">Thigh:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="thigh" class="form-control" id="thigh"
                                        value="{{ $data['thigh'] }}">
                                </div>
                            </div>
                        @endif
                        @if (isset($data['inseam']))
                            <div class="form-group row justify-content-between">
                                <label for="inseam" class="col-sm-6 col-form-label border">Inseam:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="inseam" class="form-control" id="inseam"
                                        value="{{ $data['inseam'] }}">
                                </div>
                            </div>
                        @endif
                        @if (isset($data['seam']))
                            <div class="form-group row justify-content-between">
                                <label for="seam" class="col-sm-6 col-form-label border">Seam:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="seam" class="form-control" id="seam"
                                        value="{{ $data['seam'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['skirt_length']))
                            <div class="form-group row justify-content-between">
                                <label for="skirt_length" class="col-sm-6 col-form-label border">Skirt Length:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="skirt_length" class="form-control" id="skirt_length"
                                        value="{{ $data['skirt_length'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['crotch']))
                            <div class="form-group row justify-content-between">
                                <label for="crotch" class="col-sm-6 col-form-label border">Crotch/Rise:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="crotch" class="form-control" id="crotch"
                                        value="{{ $data['crotch'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['knee']))
                            <div class="form-group row justify-content-between">
                                <label for="knee" class="col-sm-6 col-form-label border">Knee:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="knee" class="form-control" id="knee"
                                        value="{{ $data['knee'] }}">
                                </div>
                            </div>
                        @endif
                        @if (isset($data['calf']))
                            <div class="form-group row justify-content-between">
                                <label for="calf" class="col-sm-6 col-form-label border">Calf:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="calf" class="form-control" id="calf"
                                        value="{{ $data['calf'] }}">
                                </div>
                            </div>
                        @endif
                        @if (isset($data['calf']))
                            <div class="form-group row justify-content-between">
                                <label for="ancle" class="col-sm-6 col-form-label border">Ancle/Bottom:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="ancle" class="form-control" id="ancle"
                                        value="{{ $data['ancle'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['pancha_back']))
                            <div class="form-group row justify-content-between">
                                <label for="pancha_back" class="col-sm-6 col-form-label border">Pancha Back:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="pancha_back" class="form-control" id="pancha_back"
                                        value="{{ $data['pancha_back'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($data['elastic_back']))
                            <div class="form-group row justify-content-between">
                                <label for="elastic_back" class="col-sm-6 col-form-label border">Elastic Back:</label>
                                <div class="col-sm-6 border">
                                    <input type="text" name="elastic_back" class="form-control" id="elastic_back"
                                        value="{{ $data['elastic_back'] }}">
                                </div>
                            </div>
                        @endif
                    </fieldset>

                </div>
                <div class="form-group row justify-content-between ms-2">
                    <label for="shalwar_type" class="col-sm-8 col-form-label"
                        style="font-size: 18px !important; font-weight: 800 !important;">Signature: &nbsp;&nbsp;
                        ______________________________</label>
                </div>
            </div>
        </div>

        <div class="col-6 type">
            <div class="box text-center">
                <h4 class="text-uppercase">Designing & Stitching Details</h4>
            </div>
            <fieldset>
                <div class="box my-3" style="border: 1px solid; border-bottom: 5px solid;">
                    @if (isset($data['type']))
                        <div class="form-group row justify-content-between">
                            <label for="type" class="col-sm-2 col-form-label">Type:</label>
                            <div class="col-sm-8">
                                <input type="text" name="neck_line" class="form-control" id="neck_line"
                                    value="{{ $data['type'] }}"
                                    style="font-style: normal !important; font-weight: 600 !important;">
                            </div>
                        </div>
                    @endif
                </div>
                @if (isset($data['neck_line']))
                    <div class="form-group row justify-content-between">
                        <label for="neck_line" class="col-sm-2 col-form-label">Neck Line:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="neck_line" class="form-control" id="neck_line"
                                value="{{ $data['neck_line'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['pocket']))
                    <div class="form-group row justify-content-between">
                        <label for="pocket" class="col-sm-2 col-form-label">Pocket:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="pocket" class="form-control" id="pocket"
                                value="{{ $data['pocket'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['strip']))
                    <div class="form-group row justify-content-between border-3">
                        <label for="strip" class="col-sm-2 col-form-label">Strip:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="strip" class="form-control" id="strip"
                                value="{{ $data['strip'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['sleeve2']))
                    <div class="form-group row justify-content-between">
                        <label for="sleeve2" class="col-sm-2 col-form-label">Sleeve:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="sleeve2" class="form-control" id="sleeve2"
                                value="{{ $data['sleeve2'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['wrist_cluff']))
                    <div class="form-group row justify-content-between">
                        <label for="wrist_cluff" class="col-sm-2 col-form-label">Wrist/Cluff:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="wrist_cluff" class="form-control" id="wrist_cluff"
                                value="{{ $data['wrist_cluff'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['button']))
                    <div class="form-group row justify-content-between">
                        <label for="button" class="col-sm-2 col-form-label">Button:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="button" class="form-control" id="button"
                                value="{{ $data['button'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['pleats_drafts']))
                    <div class="form-group row justify-content-between">
                        <label for="pleats_drafts" class="col-sm-2 col-form-label">Pleats/Drafts:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="pleats_drafts" class="form-control" id="pleats_drafts"
                                value="{{ $data['pleats_drafts'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['zip']))
                    <div class="form-group row justify-content-between">
                        <label for="zip" class="col-sm-2 col-form-label">Zip:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="zip" class="form-control" id="zip"
                                value="{{ $data['zip'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['hem_width']))
                    <div class="form-group row justify-content-between">
                        <label for="hem_width" class="col-sm-2 col-form-label">Hem/Width:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="hem_width" class="form-control" id="hem_width"
                                value="{{ $data['hem_width'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['piping']))
                    <div class="form-group row justify-content-between">
                        <label for="piping" class="col-sm-2 col-form-label">Piping:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="piping" class="form-control" id="piping"
                                value="{{ $data['piping'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['dopatta_veil']))
                    <div class="form-group row justify-content-between">
                        <label for="dopatta_veil" class="col-sm-2 col-form-label">Dopatta/Veil:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="dopatta_veil" class="form-control" id="dopatta_veil"
                                value="{{ $data['dopatta_veil'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['shalwar']))
                    <div class="form-group row justify-content-between">
                        <label for="shalwar" class="col-sm-2 col-form-label">Shalwar:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="shalwar" class="form-control" id="shalwar"
                                value="{{ $data['shalwar'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['pant_trouser']))
                    <div class="form-group row justify-content-between">
                        <label for="pant_trouser" class="col-sm-2 col-form-label">Pant/Trouser:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="pant_trouser" class="form-control" id="pant_trouser"
                                value="{{ $data['pant_trouser'] }}">
                        </div>
                    </div>
                @endif

                @if (isset($data['puncha']))
                    <div class="form-group row justify-content-between">
                        <label for="puncha" class="col-sm-2 col-form-label">Puncha:</label>
                        <div class="col-sm-8 bottom-border-parent">
                            <input type="text" name="puncha" class="form-control" id="puncha"
                                value="{{ $data['puncha'] }}">
                        </div>
                    </div>
                @endif

            </fieldset>

            @if (isset($data['description']))
                <div class="form-group row mt-3 justify-content-between">
                    <label for="description" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-12 border">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                            style="text-align: start !important;">{{ $data['description'] }}</textarea>
                    </div>
                </div>
            @endif
        </div>
        @if (session('uploaded_images', []))
            @foreach (session('uploaded_images', []) as $image)
                <img src="data:image/jpeg;base64,{{ $image }}" alt="Uploaded Image" class="m-5"
                    style="max-width: 200px;">
            @endforeach
        @elseif(isset($data['note']))
            @foreach (json_decode($data['note']) as $image)
                <img src="data:image/jpeg;base64,{{ $image }}" alt="Uploaded Image" class="m-5"
                    style="max-width: 200px;">
            @endforeach
        @endif
    </div>
    <footer style="margin-top: 7px;">
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
