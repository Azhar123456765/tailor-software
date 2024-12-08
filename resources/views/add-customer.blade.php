@extends('layout.app') @section('title', 'Add Customer') @section('content')
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
        font-size: 15px;
        font-weight: 700 !important;
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
        font-size: 18px !important;
        font-weight: 700 !important;
        /* color: white !important; */
    }



    .main-panel>.container {
        /* background-color: gray; */
    }
</style>
<div class="page-inner">
    <div class="box bg-info p-2 my-2 d-none">
        <h2 class="text-center text-white d-none">Add Customer</h2>
    </div>
    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <fieldset>
                    <legend>General Information</legend>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-sm-2 col-form-label">Mobile:</label>
                        <div class="col-sm-10">
                            <input type="text" name="mobile" class="form-control" id="mobile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address:</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" id="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="remarks" class="col-sm-2 col-form-label">Remarks:</label>
                        <div class="col-sm-10">
                            <input type="text" name="remarks" class="form-control" id="remarks">
                        </div>
                    </div>
                </fieldset>
                <div class="row">
                    <div class="col-md-12 row ms-3 my-4 p-3"
                        style="width: 96%; background-image: linear-gradient(to right, #314755 0%, #26a0da 51%, #314755 100%);">

                        <div class="col-md-8">
                            <label for="kameez_style" class="col-sm-12 col-form-label fs-3 text-uppercase">Measurement
                                Details:</label>
                        </div>
                        <div class="col-md-4 py-2">
                            <select class="form-select form-select-md" name="kameez_type" id="type">
                                <option value="inch">Inch</option>
                                <option value="cm">Cm</option>
                                <option value="foot">Foot</option>
                                <option value="meter">Meter</option>
                            </select>
                        </div>
                    </div>
                    {{-- <h3 class="text-center my-1 text-white">Designing & Stitching Details</h3> --}}
                    <div class="col-md-6">

                        <fieldset>


                            <div class="form-group row justify-content-between">
                                <label for="kameez_style" class="col-sm-2 col-form-label">Style:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="kameez_style" class="form-control" id="kameez_style">
                                </div>
                            </div>
                            {{-- <div class="form-group row justify-content-between">
                                <label for="kameez_type" class="col-sm-2 col-form-label">Type:</label>
                                <div class="col-sm-6">
                                    <select class="form-select form-select-md" name="kameez_type" id="type">
                                        <option value="inch">Inch</option>
                                        <option value="cm">Cm</option>
                                    </select>
                                </div>
                            </div> --}}

                            <div class="form-group row justify-content-between">
                                <label for="length" class="col-sm-2 col-form-label">Length:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="length" class="form-control" id="length">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="blouse_length" class="col-sm-2 col-form-label">Blouse
                                    Patty:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="blouse_length" class="form-control" id="blouse_length">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="ghaira" class="col-sm-2 col-form-label">Ghaira:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="ghaira" class="form-control" id="ghaira">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="shoulder" class="col-sm-2 col-form-label">Shoulder:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="shoulder" class="form-control" id="shoulder">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="down_shoulder" class="col-sm-2 col-form-label">Down Shoulder:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="down_shoulder" class="form-control" id="down_shoulder">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="strap_shoulder" class="col-sm-2 col-form-label">Strap Shoulder:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="strap_shoulder" class="form-control" id="strap_shoulder">
                                </div>
                            </div>

                            <div class="form-group row justify-content-between">
                                <label for="neck" class="col-sm-2 col-form-label">Neck:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="neck" class="form-control" id="neck">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="chest" class="col-sm-2 col-form-label">Chest:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="chest" class="form-control" id="chest">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="upper_chest" class="col-sm-2 col-form-label">Upper
                                    Chest:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="upper_chest" class="form-control" id="upper_chest">
                                </div>
                            </div>

                            <div class="form-group row justify-content-between">
                                <label for="upper_back" class="col-sm-2 col-form-label">Upper
                                    Back:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="upper_back" class="form-control" id="upper_back">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="cross_back" class="col-sm-2 col-form-label">Cross
                                    Back:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="cross_back" class="form-control" id="cross_back">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="waist" class="col-sm-2 col-form-label">Waist:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="waist" class="form-control" id="waist">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="kameez_hip" class="col-sm-2 col-form-label">Hip:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="kameez_hip" class="form-control" id="kameez_hip">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="fitting_seam" class="col-sm-2 col-form-label">Fitting
                                    Seam:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="fitting_seam" class="form-control" id="fitting_seam">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="sleeve" class="col-sm-2 col-form-label">Sleeve:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="sleeve" class="form-control" id="sleeve">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="bicep" class="col-sm-2 col-form-label">Bicep:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="bicep" class="form-control" id="bicep">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="elbow" class="col-sm-2 col-form-label">Elbow:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="elbow" class="form-control" id="elbow">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="forearm" class="col-sm-2 col-form-label">Forearm:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="forearm" class="form-control" id="forearm">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="armhole" class="col-sm-2 col-form-label">Armhole:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="armhole" class="form-control" id="armhole">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="wrist_cuff" class="col-sm-2 col-form-label">Wrist/Cuff:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="wrist_cuff" class="form-control" id="wrist_cuff">
                                </div>
                            </div>
                        </fieldset>

                    </div>
                    <div class="col-md-6">

                        <fieldset>


                            <div class="form-group row justify-content-between">
                                <label for="shalwar_style" class="col-sm-2 col-form-label">Style:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="shalwar_style" class="form-control" id="shalwar_style">
                                </div>
                            </div>
                            {{-- <div class="form-group row justify-content-between">
                                <label for="shalwar_type" class="col-sm-2 col-form-label">Type:</label>
                                <div class="col-sm-6">
                                    <select class="form-select form-select-md" name="shalwar_type" id="type">
                                        <option value="inch">Inch</option>
                                        <option value="cm">Cm</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="form-group row justify-content-between">
                                <label for="length" class="col-sm-2 col-form-label">Length:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="length2" class="form-control" id="length2">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="west_belt" class="col-sm-2 col-form-label">Waist
                                    Belt:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="west_belt" class="form-control" id="west_belt">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="hip" class="col-sm-2 col-form-label">Hip:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="hip" class="form-control" id="hip">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="thigh" class="col-sm-2 col-form-label">Thigh:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="thigh" class="form-control" id="thigh">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="inseam" class="col-sm-2 col-form-label">Inseam:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="inseam" class="form-control" id="inseam">
                                </div>
                            </div>

                            <div class="form-group row justify-content-between">
                                <label for="skirt_length" class="col-sm-2 col-form-label">Skirt
                                    Length:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="skirt_length" class="form-control" id="skirt_length">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="crotch" class="col-sm-2 col-form-label">Crotch/Rise:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="crotch" class="form-control" id="crotch">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="knee" class="col-sm-2 col-form-label">Knee:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="knee" class="form-control" id="knee">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="calf" class="col-sm-2 col-form-label">Calf:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="calf" class="form-control" id="calf">
                                </div>
                            </div>
                            <div class="form-group row justify-content-between">
                                <label for="ancle" class="col-sm-2 col-form-label">Ancle/Bottom:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="ancle" class="form-control" id="ancle">
                                </div>
                            </div>
                            {{-- <div class="form-group row justify-content-between">
                                <label for="pancha_back" class="col-sm-2 col-form-label">Pancha
                                    Back:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="pancha_back" class="form-control" id="pancha_back">
                                </div>
                            </div> --}}
                            <div class="form-group row justify-content-between">
                                <label for="elastic_back" class="col-sm-2 col-form-label">Elastic:</label>
                                <div class="col-sm-6">
                                    <input type="text" name="elastic_back" class="form-control" id="elastic_back">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Status</legend>
                            <div class="form-group row justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status1"
                                        value="active" checked>
                                    <label class="form-check-label" for="status1">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status2"
                                        value="pending">
                                    <label class="form-check-label" for="status2">
                                        pending
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status2"
                                        value="complete">
                                    <label class="form-check-label" for="status2">
                                        complete
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h3 class="text-center mb-4 text-white text-uppercase"></h3>
                <div class="col-md-12 row ms-1 my-4 p-3 bg-info"
                    style="width: 100%; background-image: linear-gradient(to right, #314755 0%, #26a0da 51%, #314755 100%);">
                    <div class="col-md-12">
                        <label for="kameez_style" class="col-sm-12 text-center fs-3 text-uppercase">Designing &
                            Stitching Details</label>
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="type" class="col-sm-2 col-form-label">Type:</label>
                    <div class="col-sm-8">
                        <select class="form-select form-select-md" name="type" id="type">
                            <option selected>Select one</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="kids">Kids</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="neck_line" class="col-sm-2 col-form-label">Neck Line:</label>
                    <div class="col-sm-8">
                        <input type="text" name="neck_line" class="form-control" id="neck_line">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="seam" class="col-sm-2 col-form-label">Seam:</label>
                    <div class="col-sm-8">
                        <input type="text" name="seam" class="form-control" id="seam">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="pocket" class="col-sm-2 col-form-label">Pocket:</label>
                    <div class="col-sm-8">
                        <input type="text" name="pocket" class="form-control" id="pocket">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="strip" class="col-sm-2 col-form-label">Strip:</label>
                    <div class="col-sm-8">
                        <input type="text" name="strip" class="form-control" id="strip">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="sleeve2" class="col-sm-2 col-form-label">Sleeve:</label>
                    <div class="col-sm-8">
                        <input type="text" name="sleeve2" class="form-control" id="sleeve2">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="wrist_cluff" class="col-sm-2 col-form-label">Wrist/Cluff:</label>
                    <div class="col-sm-8">
                        <input type="text" name="wrist_cluff" class="form-control" id="wrist_cluff">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="button" class="col-sm-2 col-form-label">Button:</label>
                    <div class="col-sm-8">
                        <input type="text" name="button" class="form-control" id="button">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="pleats_drafts" class="col-sm-2 col-form-label">Pleats/Drafts:</label>
                    <div class="col-sm-8">
                        <input type="text" name="pleats_drafts" class="form-control" id="pleats_drafts">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="zip" class="col-sm-2 col-form-label">Zip:</label>
                    <div class="col-sm-8">
                        <input type="text" name="zip" class="form-control" id="zip">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="hem_width" class="col-sm-2 col-form-label">Hem/Width:</label>
                    <div class="col-sm-8">
                        <input type="text" name="hem_width" class="form-control" id="hem_width">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="piping" class="col-sm-2 col-form-label">Piping:</label>
                    <div class="col-sm-8">
                        <input type="text" name="piping" class="form-control" id="piping">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="dopatta_veil" class="col-sm-2 col-form-label">Dopatta/Veil:</label>
                    <div class="col-sm-8">
                        <input type="text" name="dopatta_veil" class="form-control" id="dopatta_veil">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="shalwar" class="col-sm-2 col-form-label">Shalwar:</label>
                    <div class="col-sm-8">
                        <input type="text" name="shalwar" class="form-control" id="shalwar">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="pant_trouser" class="col-sm-2 col-form-label">Pant/Trouser:</label>
                    <div class="col-sm-8">
                        <input type="text" name="pant_trouser" class="form-control" id="pant_trouser">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label for="puncha" class="col-sm-2 col-form-label">Puncha:</label>
                    <div class="col-sm-8">
                        <input type="text" name="puncha" class="form-control" id="puncha">
                    </div>
                </div>
                <div class="form-group row mt-3  justify-content-between">
                    <label for="note" class="col-sm-2 col-form-label">Picture:</label>
                    <div class="col-sm-8">
                        <input type="file" name="note[]" multiple class="form-control" id="note">
                    </div>
                </div>
                <div class="form-group row mt-3 justify-content-between">
                    <label for="description" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-8">
                        <textarea name="description" id="description" cols="30" rows="10"
                            class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 d-flex align-items-center justify-content-center my-4">
                <div class="col-3">
                    <button class="btn btn-lg btn-dark my-2 w-50" type="submit">Next</button>
                </div>
                <div class="col-3">
                    <button class="btn btn-lg btn-dark my-2 w-50" type="submit">Save</button>
                </div>
                <!-- <div class="col-3">
                    <button class="btn btn-lg btn-dark my-2 w-75" type="button"
                        onclick="printCustomer(this)">Print</button>
                </div> -->
                <div class="col-3">
                    <button class="btn btn-lg btn-dark my-2 w-50" type="button"
                        onclick="location.reload()">Reset</button>
                </div>
            </div>


        </div>
    </form>
</div>
<script>
    function printCustomer() {
        var formData = $('form').serialize();
        location.href = '/customer/print?' + formData
    }
</script>
@endsection