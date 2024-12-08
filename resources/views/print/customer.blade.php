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
        legend {
            color: black !important;
        }

        .form-group {
            padding: 0px !important;
        }

        .form-control {
            padding: 5px !important;
        }

        .form-check label,
        .form-group label {
            margin-bottom: 0px !important;
            color: rgb(0, 0, 0) !important;
        }

        .main-panel>.container {
            background-color: rgb(255, 255, 255);
        }

        .form-group input,
        textarea {
            background: transparent !important;
            border: none !important;
        }



        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            position: relative;
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
    </style>

</head>
<button onclick="printDiv()" class="print-button">Print PDF</button>

<div class="page-inner">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('assets/img/logo.jpg') }}" width="350px" class="img-fluid"  alt="LOGO">
        </div>

        <div class="col-lg-6 my-3">
            <fieldset>
                <legend>General Information</legend>

                @if ($data['name'])
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" value="{{ $data['name'] }}"
                            required>
                    </div>
                </div>
                @endif

                @if ($data['mobile'])
                <div class="form-group row">
                    <label for="mobile" class="col-sm-2 col-form-label">Mobile:</label>
                    <div class="col-sm-10">
                        <input type="text" name="mobile" class="form-control" id="mobile" value="{{ $data['mobile'] }}">
                    </div>
                </div>
                @endif

                @if ($data['address'])
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address:</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" id="address"
                            value="{{ $data['address'] }}">
                    </div>
                </div>
                @endif

                @if ($data['remarks'])
                <div class="form-group row">
                    <label for="remarks" class="col-sm-2 col-form-label">Remarks:</label>
                    <div class="col-sm-10">
                        <input type="text" name="remarks" class="form-control" id="remarks"
                            value="{{ $data['remarks'] }}">
                    </div>
                </div>
                @endif
            </fieldset>
        </div>

        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        

                        @if ($data['kameez_type'])
                        <div class="form-group row justify-content-between">
                            <label for="kameez_type" class="col-sm-2 col-form-label">Type:</label>
                            <div class="col-sm-6">
                                <input type="text" name="kameez_type" class="form-control" id="kameez_type"
                                    value="{{ $data['kameez_type'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['length'])
                        <div class="form-group row justify-content-between">
                            <label for="length" class="col-sm-2 col-form-label">Length:</label>
                            <div class="col-sm-6">
                                <input type="text" name="length" class="form-control" id="length"
                                    value="{{ $data['length'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['ghaira'])
                        <div class="form-group row justify-content-between">
                            <label for="ghaira" class="col-sm-2 col-form-label">Ghaira:</label>
                            <div class="col-sm-6">
                                <input type="text" name="ghaira" class="form-control" id="ghaira"
                                    value="{{ $data['ghaira'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['shoulder'])
                        <div class="form-group row justify-content-between">
                            <label for="shoulder" class="col-sm-2 col-form-label">Shoulder:</label>
                            <div class="col-sm-6">
                                <input type="text" name="shoulder" class="form-control" id="shoulder"
                                    value="{{ $data['shoulder'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['neck'])
                        <div class="form-group row justify-content-between">
                            <label for="neck" class="col-sm-2 col-form-label">Neck:</label>
                            <div class="col-sm-6">
                                <input type="text" name="neck" class="form-control" id="neck"
                                    value="{{ $data['neck'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['chest'])
                        <div class="form-group row justify-content-between">
                            <label for="chest" class="col-sm-2 col-form-label">Chest:</label>
                            <div class="col-sm-6">
                                <input type="text" name="chest" class="form-control" id="chest"
                                    value="{{ $data['chest'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['upper_chest'])
                        <div class="form-group row justify-content-between">
                            <label for="upper_chest" class="col-sm-2 col-form-label">Upper Chest:</label>
                            <div class="col-sm-6">
                                <input type="text" name="upper_chest" class="form-control" id="upper_chest"
                                    value="{{ $data['upper_chest'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['blouse_length'])
                        <div class="form-group row justify-content-between">
                            <label for="blouse_length" class="col-sm-2 col-form-label">Blouse Length:</label>
                            <div class="col-sm-6">
                                <input type="text" name="blouse_length" class="form-control" id="blouse_length"
                                    value="{{ $data['blouse_length'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['upper_back'])
                        <div class="form-group row justify-content-between">
                            <label for="upper_back" class="col-sm-2 col-form-label">Upper Back:</label>
                            <div class="col-sm-6">
                                <input type="text" name="upper_back" class="form-control" id="upper_back"
                                    value="{{ $data['upper_back'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['cross_back'])
                        <div class="form-group row justify-content-between">
                            <label for="cross_back" class="col-sm-2 col-form-label">Cross Back:</label>
                            <div class="col-sm-6">
                                <input type="text" name="cross_back" class="form-control" id="cross_back"
                                    value="{{ $data['cross_back'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['waist'])
                        <div class="form-group row justify-content-between">
                            <label for="waist" class="col-sm-2 col-form-label">Waist:</label>
                            <div class="col-sm-6">
                                <input type="text" name="waist" class="form-control" id="waist"
                                    value="{{ $data['waist'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['hip'])
                        <div class="form-group row justify-content-between">
                            <label for="hip" class="col-sm-2 col-form-label">Hip:</label>
                            <div class="col-sm-6">
                                <input type="text" name="hip" class="form-control" id="hip" value="{{ $data['hip'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['fitting_seam'])
                        <div class="form-group row justify-content-between">
                            <label for="fitting_seam" class="col-sm-2 col-form-label">Fitting Seam:</label>
                            <div class="col-sm-6">
                                <input type="text" name="fitting_seam" class="form-control" id="fitting_seam"
                                    value="{{ $data['fitting_seam'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['sleeve'])
                        <div class="form-group row justify-content-between">
                            <label for="sleeve" class="col-sm-2 col-form-label">Sleeve:</label>
                            <div class="col-sm-6">
                                <input type="text" name="sleeve" class="form-control" id="sleeve"
                                    value="{{ $data['sleeve'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['bicep'])
                        <div class="form-group row justify-content-between">
                            <label for="bicep" class="col-sm-2 col-form-label">Bicep:</label>
                            <div class="col-sm-6">
                                <input type="text" name="bicep" class="form-control" id="bicep"
                                    value="{{ $data['bicep'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['armhole'])
                        <div class="form-group row justify-content-between">
                            <label for="armhole" class="col-sm-2 col-form-label">Armhole:</label>
                            <div class="col-sm-6">
                                <input type="text" name="armhole" class="form-control" id="armhole"
                                    value="{{ $data['armhole'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['wrist_cuff'])
                        <div class="form-group row justify-content-between">
                            <label for="wrist_cuff" class="col-sm-2 col-form-label">Wrist/Cuff:</label>
                            <div class="col-sm-6">
                                <input type="text" name="wrist_cuff" class="form-control" id="wrist_cuff"
                                    value="{{ $data['wrist_cuff'] }}">
                            </div>
                        </div>
                        @endif

                    </fieldset>

                </div>

                <div class="col-md-6">
                    <fieldset>
                        

                        @if ($data['shalwar_type'])
                        <div class="form-group row justify-content-between">
                            <label for="shalwar_type" class="col-sm-2 col-form-label">Type:</label>
                            <div class="col-sm-6">
                                <input type="text" name="shalwar_type" class="form-control" id="shalwar_type"
                                    value="{{ $data['shalwar_type'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['length2'])
                        <div class="form-group row justify-content-between">
                            <label for="length2" class="col-sm-2 col-form-label">Length:</label>
                            <div class="col-sm-6">
                                <input type="text" name="length2" class="form-control" id="length2"
                                    value="{{ $data['length2'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['west_belt'])
                        <div class="form-group row justify-content-between">
                            <label for="west_belt" class="col-sm-2 col-form-label">Waist Belt:</label>
                            <div class="col-sm-6">
                                <input type="text" name="west_belt" class="form-control" id="west_belt"
                                    value="{{ $data['west_belt'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['hip'])
                        <div class="form-group row justify-content-between">
                            <label for="hip" class="col-sm-2 col-form-label">Hip:</label>
                            <div class="col-sm-6">
                                <input type="text" name="hip" class="form-control" id="hip" value="{{ $data['hip'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['thigh'])
                        <div class="form-group row justify-content-between">
                            <label for="thigh" class="col-sm-2 col-form-label">Thigh:</label>
                            <div class="col-sm-6">
                                <input type="text" name="thigh" class="form-control" id="thigh"
                                    value="{{ $data['thigh'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['skirt_length'])
                        <div class="form-group row justify-content-between">
                            <label for="skirt_length" class="col-sm-2 col-form-label">Skirt Length:</label>
                            <div class="col-sm-6">
                                <input type="text" name="skirt_length" class="form-control" id="skirt_length"
                                    value="{{ $data['skirt_length'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['crotch'])
                        <div class="form-group row justify-content-between">
                            <label for="crotch" class="col-sm-2 col-form-label">Crotch/Rise:</label>
                            <div class="col-sm-6">
                                <input type="text" name="crotch" class="form-control" id="crotch"
                                    value="{{ $data['crotch'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['knee'])
                        <div class="form-group row justify-content-between">
                            <label for="knee" class="col-sm-2 col-form-label">Knee:</label>
                            <div class="col-sm-6">
                                <input type="text" name="knee" class="form-control" id="knee"
                                    value="{{ $data['knee'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['pancha_back'])
                        <div class="form-group row justify-content-between">
                            <label for="pancha_back" class="col-sm-2 col-form-label">Pancha Back:</label>
                            <div class="col-sm-6">
                                <input type="text" name="pancha_back" class="form-control" id="pancha_back"
                                    value="{{ $data['pancha_back'] }}">
                            </div>
                        </div>
                        @endif

                        @if ($data['elastic_back'])
                        <div class="form-group row justify-content-between">
                            <label for="elastic_back" class="col-sm-2 col-form-label">Elastic Back:</label>
                            <div class="col-sm-6">
                                <input type="text" name="elastic_back" class="form-control" id="elastic_back"
                                    value="{{ $data['elastic_back'] }}">
                            </div>
                        </div>
                        @endif
                    </fieldset>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            @if ($data['type'])
            <div class="form-group row justify-content-between">
                <label for="type" class="col-sm-2 col-form-label">Type:</label>
                <div class="col-sm-8">
                    <input type="text" name="neck_line" class="form-control" id="neck_line" value="{{ $data['type'] }}">
                </div>
            </div>
            @endif

            @if ($data['neck_line'])
            <div class="form-group row justify-content-between">
                <label for="neck_line" class="col-sm-2 col-form-label">Neck Line:</label>
                <div class="col-sm-8">
                    <input type="text" name="neck_line" class="form-control" id="neck_line"
                        value="{{ $data['neck_line'] }}">
                </div>
            </div>
            @endif

            @if ($data['pocket'])
            <div class="form-group row justify-content-between">
                <label for="pocket" class="col-sm-2 col-form-label">Pocket:</label>
                <div class="col-sm-8">
                    <input type="text" name="pocket" class="form-control" id="pocket" value="{{ $data['pocket'] }}">
                </div>
            </div>
            @endif

            @if ($data['strip'])
            <div class="form-group row justify-content-between">
                <label for="strip" class="col-sm-2 col-form-label">Strip:</label>
                <div class="col-sm-8">
                    <input type="text" name="strip" class="form-control" id="strip" value="{{ $data['strip'] }}">
                </div>
            </div>
            @endif

            @if ($data['sleeve2'])
            <div class="form-group row justify-content-between">
                <label for="sleeve2" class="col-sm-2 col-form-label">Sleeve:</label>
                <div class="col-sm-8">
                    <input type="text" name="sleeve2" class="form-control" id="sleeve2" value="{{ $data['sleeve2'] }}">
                </div>
            </div>
            @endif

            @if ($data['wrist_cluff'])
            <div class="form-group row justify-content-between">
                <label for="wrist_cluff" class="col-sm-2 col-form-label">Wrist/Cluff:</label>
                <div class="col-sm-8">
                    <input type="text" name="wrist_cluff" class="form-control" id="wrist_cluff"
                        value="{{ $data['wrist_cluff'] }}">
                </div>
            </div>
            @endif

            @if ($data['button'])
            <div class="form-group row justify-content-between">
                <label for="button" class="col-sm-2 col-form-label">Button:</label>
                <div class="col-sm-8">
                    <input type="text" name="button" class="form-control" id="button" value="{{ $data['button'] }}">
                </div>
            </div>
            @endif

            @if ($data['pleats_drafts'])
            <div class="form-group row justify-content-between">
                <label for="pleats_drafts" class="col-sm-2 col-form-label">Pleats/Drafts:</label>
                <div class="col-sm-8">
                    <input type="text" name="pleats_drafts" class="form-control" id="pleats_drafts"
                        value="{{ $data['pleats_drafts'] }}">
                </div>
            </div>
            @endif

            @if ($data['zip'])
            <div class="form-group row justify-content-between">
                <label for="zip" class="col-sm-2 col-form-label">Zip:</label>
                <div class="col-sm-8">
                    <input type="text" name="zip" class="form-control" id="zip" value="{{ $data['zip'] }}">
                </div>
            </div>
            @endif

            @if ($data['hem_width'])
            <div class="form-group row justify-content-between">
                <label for="hem_width" class="col-sm-2 col-form-label">Hem/Width:</label>
                <div class="col-sm-8">
                    <input type="text" name="hem_width" class="form-control" id="hem_width"
                        value="{{ $data['hem_width'] }}">
                </div>
            </div>
            @endif

            @if ($data['piping'])
            <div class="form-group row justify-content-between">
                <label for="piping" class="col-sm-2 col-form-label">Piping:</label>
                <div class="col-sm-8">
                    <input type="text" name="piping" class="form-control" id="piping" value="{{ $data['piping'] }}">
                </div>
            </div>
            @endif

            @if ($data['dopatta_veil'])
            <div class="form-group row justify-content-between">
                <label for="dopatta_veil" class="col-sm-2 col-form-label">Dopatta/Veil:</label>
                <div class="col-sm-8">
                    <input type="text" name="dopatta_veil" class="form-control" id="dopatta_veil"
                        value="{{ $data['dopatta_veil'] }}">
                </div>
            </div>
            @endif

            @if ($data['shalwar'])
            <div class="form-group row justify-content-between">
                <label for="shalwar" class="col-sm-2 col-form-label">Shalwar:</label>
                <div class="col-sm-8">
                    <input type="text" name="shalwar" class="form-control" id="shalwar" value="{{ $data['shalwar'] }}">
                </div>
            </div>
            @endif

            @if ($data['pant_trouser'])
            <div class="form-group row justify-content-between">
                <label for="pant_trouser" class="col-sm-2 col-form-label">Pant/Trouser:</label>
                <div class="col-sm-8">
                    <input type="text" name="pant_trouser" class="form-control" id="pant_trouser"
                        value="{{ $data['pant_trouser'] }}">
                </div>
            </div>
            @endif

            @if ($data['puncha'])
            <div class="form-group row justify-content-between">
                <label for="puncha" class="col-sm-2 col-form-label">Puncha:</label>
                <div class="col-sm-8">
                    <input type="text" name="puncha" class="form-control" id="puncha" value="{{ $data['puncha'] }}">
                </div>
            </div>
            @endif


            @if ($data['description'])
            <div class="form-group row mt-3 justify-content-between">
                <label for="description" class="col-sm-2 col-form-label">Description:</label>
                <div class="col-sm-8">
                    <textarea name="description" id="description" cols="30" rows="10"
                        class="form-control">{{ $data['description'] }}</textarea>
                </div>
            </div>
            @endif
        </div>

    </div>
</div>

<script>
    function printDiv() {
    var div = document.getElementsByClassName('page-inner')[0];  // Access the first div with class 'page-inner'

    if (!div) {
        console.error("Div not found");
        return;
    }

    // Save the current page content
    var originalContent = document.body.innerHTML;

    // Clear the body and append only the content of the div to print
    document.body.innerHTML = div.innerHTML;

    // Trigger the print dialog
    window.print();

    // Restore the original content after printing
    document.body.innerHTML = originalContent;
}

</script>