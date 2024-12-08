<head>
    <style>
        /* Inline styles for email compatibility */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }
        .img-fluid {
            width: 100%;
            height: auto;
        }
        .form-group {
            padding: 10px 0;
        }
        .form-control {
            padding: 10px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
            margin-top: 5px;
        }
        label {
            font-weight: bold;
        }
        fieldset {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }
        legend {
            color: black;
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('assets/img/logo.jpg') }}" width="350px" class="img-fluid" alt="LOGO">
            </div>
            <div class="col-lg-6 my-3">
                <fieldset>
                    <legend>General Information</legend>

                    @if (isset($emailOrder['date']))
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input disabled type="text" name="date" class="form-control" id="date"
                                value="{{ $emailOrder['date'] }}" required>
                        </div>
                    @endif

                    @if (isset($emailOrder['due_date']))
                        <div class="form-group">
                            <label for="due_date">Due Date:</label>
                            <input disabled type="text" name="due_date" class="form-control" id="due_date"
                                value="{{ $emailOrder['due_date'] }}">
                        </div>
                    @endif

                    @if (isset($customer))
                        <div class="form-group">
                            <label for="customer">Customer:</label>
                            <input disabled type="text" name="customer" class="form-control" id="customer"
                                value="{{ $customer->name }}">
                        </div>
                    @endif
                </fieldset>
            </div>
        </div>
    </div>
</body>


        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        

                        @if (isset($emailOrder['kameez_type']))
                            <div class="form-group row justify-content-between">
                                <label for="kameez_type" class="col-sm-2 col-form-label">Type:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="kameez_type" class="form-control" id="kameez_type"
                                        value="{{ $emailOrder['kameez_type'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['length']))
                            <div class="form-group row justify-content-between">
                                <label for="length" class="col-sm-2 col-form-label">Length:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="length" class="form-control" id="length"
                                        value="{{ $emailOrder['length'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['ghaira']))
                            <div class="form-group row justify-content-between">
                                <label for="ghaira" class="col-sm-2 col-form-label">Ghaira:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="ghaira" class="form-control" id="ghaira"
                                        value="{{ $emailOrder['ghaira'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['shoulder']))
                            <div class="form-group row justify-content-between">
                                <label for="shoulder" class="col-sm-2 col-form-label">Shoulder:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="shoulder" class="form-control" id="shoulder"
                                        value="{{ $emailOrder['shoulder'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['neck']))
                            <div class="form-group row justify-content-between">
                                <label for="neck" class="col-sm-2 col-form-label">Neck:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="neck" class="form-control" id="neck"
                                        value="{{ $emailOrder['neck'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['chest']))
                            <div class="form-group row justify-content-between">
                                <label for="chest" class="col-sm-2 col-form-label">Chest:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="chest" class="form-control" id="chest"
                                        value="{{ $emailOrder['chest'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['upper_chest']))
                            <div class="form-group row justify-content-between">
                                <label for="upper_chest" class="col-sm-2 col-form-label">Upper Chest:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="upper_chest" class="form-control" id="upper_chest"
                                        value="{{ $emailOrder['upper_chest'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['blouse_length']))
                            <div class="form-group row justify-content-between">
                                <label for="blouse_length" class="col-sm-2 col-form-label">Blouse Patty:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="blouse_length" class="form-control"
                                        id="blouse_length" value="{{ $emailOrder['blouse_length'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['upper_back']))
                            <div class="form-group row justify-content-between">
                                <label for="upper_back" class="col-sm-2 col-form-label">Upper Back:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="upper_back" class="form-control" id="upper_back"
                                        value="{{ $emailOrder['upper_back'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['cross_back']))
                            <div class="form-group row justify-content-between">
                                <label for="cross_back" class="col-sm-2 col-form-label">Cross Back:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="cross_back" class="form-control" id="cross_back"
                                        value="{{ $emailOrder['cross_back'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['waist']))
                            <div class="form-group row justify-content-between">
                                <label for="waist" class="col-sm-2 col-form-label">Waist:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="waist" class="form-control" id="waist"
                                        value="{{ $emailOrder['waist'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['hip']))
                            <div class="form-group row justify-content-between">
                                <label for="hip" class="col-sm-2 col-form-label">Hip:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="hip" class="form-control" id="hip"
                                        value="{{ $emailOrder['hip'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['fitting_seam']))
                            <div class="form-group row justify-content-between">
                                <label for="fitting_seam" class="col-sm-2 col-form-label">Fitting Seam:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="fitting_seam" class="form-control" id="fitting_seam"
                                        value="{{ $emailOrder['fitting_seam'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['sleeve']))
                            <div class="form-group row justify-content-between">
                                <label for="sleeve" class="col-sm-2 col-form-label">Sleeve:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="sleeve" class="form-control" id="sleeve"
                                        value="{{ $emailOrder['sleeve'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['bicep']))
                            <div class="form-group row justify-content-between">
                                <label for="bicep" class="col-sm-2 col-form-label">Bicep:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="bicep" class="form-control" id="bicep"
                                        value="{{ $emailOrder['bicep'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['armhole']))
                            <div class="form-group row justify-content-between">
                                <label for="armhole" class="col-sm-2 col-form-label">Armhole:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="armhole" class="form-control" id="armhole"
                                        value="{{ $emailOrder['armhole'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['wrist_cuff']))
                            <div class="form-group row justify-content-between">
                                <label for="wrist_cuff" class="col-sm-2 col-form-label">Wrist/Cuff:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="wrist_cuff" class="form-control" id="wrist_cuff"
                                        value="{{ $emailOrder['wrist_cuff'] }}">
                                </div>
                            </div>
                        @endif

                    </fieldset>

                </div>

                <div class="col-md-6">
                    <fieldset>
                        

                        @if (isset($emailOrder['shalwar_type']))
                            <div class="form-group row justify-content-between">
                                <label for="shalwar_type" class="col-sm-2 col-form-label">Type:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="shalwar_type" class="form-control" id="shalwar_type"
                                        value="{{ $emailOrder['shalwar_type'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['length2']))
                            <div class="form-group row justify-content-between">
                                <label for="length2" class="col-sm-2 col-form-label">Length:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="length2" class="form-control" id="length2"
                                        value="{{ $emailOrder['length2'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['west_belt']))
                            <div class="form-group row justify-content-between">
                                <label for="west_belt" class="col-sm-2 col-form-label">Waist Belt:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="west_belt" class="form-control" id="west_belt"
                                        value="{{ $emailOrder['west_belt'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['hip']))
                            <div class="form-group row justify-content-between">
                                <label for="hip" class="col-sm-2 col-form-label">Hip:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="hip" class="form-control" id="hip"
                                        value="{{ $emailOrder['hip'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['thigh']))
                            <div class="form-group row justify-content-between">
                                <label for="thigh" class="col-sm-2 col-form-label">Thigh:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="thigh" class="form-control" id="thigh"
                                        value="{{ $emailOrder['thigh'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['skirt_length']))
                            <div class="form-group row justify-content-between">
                                <label for="skirt_length" class="col-sm-2 col-form-label">Skirt Length:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="skirt_length" class="form-control" id="skirt_length"
                                        value="{{ $emailOrder['skirt_length'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['crotch']))
                            <div class="form-group row justify-content-between">
                                <label for="crotch" class="col-sm-2 col-form-label">Crotch/Rise:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="crotch" class="form-control" id="crotch"
                                        value="{{ $emailOrder['crotch'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['knee']))
                            <div class="form-group row justify-content-between">
                                <label for="knee" class="col-sm-2 col-form-label">Knee:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="knee" class="form-control" id="knee"
                                        value="{{ $emailOrder['knee'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['pancha_back']))
                            <div class="form-group row justify-content-between">
                                <label for="pancha_back" class="col-sm-2 col-form-label">Pancha Back:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="pancha_back" class="form-control" id="pancha_back"
                                        value="{{ $emailOrder['pancha_back'] }}">
                                </div>
                            </div>
                        @endif

                        @if (isset($emailOrder['elastic_back']))
                            <div class="form-group row justify-content-between">
                                <label for="elastic_back" class="col-sm-2 col-form-label">Elastic Back:</label>
                                <div class="col-sm-6">
                                    <input disabled type="text" name="elastic_back" class="form-control" id="elastic_back"
                                        value="{{ $emailOrder['elastic_back'] }}">
                                </div>
                            </div>
                        @endif
                    </fieldset>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            @if (isset($emailOrder['type']))
                <div class="form-group row justify-content-between">
                    <label for="type" class="col-sm-2 col-form-label">Type:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="neck_line" class="form-control" id="neck_line"
                            value="{{ $emailOrder['type'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['neck_line']))
                <div class="form-group row justify-content-between">
                    <label for="neck_line" class="col-sm-2 col-form-label">Neck Line:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="neck_line" class="form-control" id="neck_line"
                            value="{{ $emailOrder['neck_line'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['pocket']))
                <div class="form-group row justify-content-between">
                    <label for="pocket" class="col-sm-2 col-form-label">Pocket:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="pocket" class="form-control" id="pocket"
                            value="{{ $emailOrder['pocket'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['strip']))
                <div class="form-group row justify-content-between">
                    <label for="strip" class="col-sm-2 col-form-label">Strip:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="strip" class="form-control" id="strip"
                            value="{{ $emailOrder['strip'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['sleeve2']))
                <div class="form-group row justify-content-between">
                    <label for="sleeve2" class="col-sm-2 col-form-label">Sleeve:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="sleeve2" class="form-control" id="sleeve2"
                            value="{{ $emailOrder['sleeve2'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['wrist_cluff']))
                <div class="form-group row justify-content-between">
                    <label for="wrist_cluff" class="col-sm-2 col-form-label">Wrist/Cluff:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="wrist_cluff" class="form-control" id="wrist_cluff"
                            value="{{ $emailOrder['wrist_cluff'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['button']))
                <div class="form-group row justify-content-between">
                    <label for="button" class="col-sm-2 col-form-label">Button:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="button" class="form-control" id="button"
                            value="{{ $emailOrder['button'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['pleats_drafts']))
                <div class="form-group row justify-content-between">
                    <label for="pleats_drafts" class="col-sm-2 col-form-label">Pleats/Drafts:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="pleats_drafts" class="form-control" id="pleats_drafts"
                            value="{{ $emailOrder['pleats_drafts'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['zip']))
                <div class="form-group row justify-content-between">
                    <label for="zip" class="col-sm-2 col-form-label">Zip:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="zip" class="form-control" id="zip"
                            value="{{ $emailOrder['zip'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['hem_width']))
                <div class="form-group row justify-content-between">
                    <label for="hem_width" class="col-sm-2 col-form-label">Hem/Width:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="hem_width" class="form-control" id="hem_width"
                            value="{{ $emailOrder['hem_width'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['piping']))
                <div class="form-group row justify-content-between">
                    <label for="piping" class="col-sm-2 col-form-label">Piping:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="piping" class="form-control" id="piping"
                            value="{{ $emailOrder['piping'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['dopatta_veil']))
                <div class="form-group row justify-content-between">
                    <label for="dopatta_veil" class="col-sm-2 col-form-label">Dopatta/Veil:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="dopatta_veil" class="form-control" id="dopatta_veil"
                            value="{{ $emailOrder['dopatta_veil'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['shalwar']))
                <div class="form-group row justify-content-between">
                    <label for="shalwar" class="col-sm-2 col-form-label">Shalwar:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="shalwar" class="form-control" id="shalwar"
                            value="{{ $emailOrder['shalwar'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['pant_trouser']))
                <div class="form-group row justify-content-between">
                    <label for="pant_trouser" class="col-sm-2 col-form-label">Pant/Trouser:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="pant_trouser" class="form-control" id="pant_trouser"
                            value="{{ $emailOrder['pant_trouser'] }}">
                    </div>
                </div>
            @endif

            @if (isset($emailOrder['puncha']))
                <div class="form-group row justify-content-between">
                    <label for="puncha" class="col-sm-2 col-form-label">Puncha:</label>
                    <div class="col-sm-8">
                        <input disabled type="text" name="puncha" class="form-control" id="puncha"
                            value="{{ $emailOrder['puncha'] }}">
                    </div>
                </div>
            @endif


            @if (isset($emailOrder['description']))
                <div class="form-group row mt-3 justify-content-between">
                    <label for="description" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-8">
                        <textarea disabled name="description" id="description" cols="30" rows="10" class="form-control">{{ $emailOrder['description'] }}</textarea>
                    </div>
                </div>
            @endif
        </div>

    </div>
</div>
