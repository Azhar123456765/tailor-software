<!-- Fonts and icons -->
<script src="{{ url('../assets/js/plugin/webfont/webfont.min.js') }}"></script>
<script>
    WebFont.load({
        google: {
            families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["../assets/css/fonts.min.css"],
        },
        active: function() {
            sessionStorage.fonts = true;
        },
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="{{ url('../assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ url('../assets/css/plugins.min.css') }}" />
<link rel="stylesheet" href="{{ url('../assets/css/kaiadmin.min.css') }}" />

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{ url('../assets/css/demo.css') }}" />
<style>
    * {
        /* font-family: 'Times New Roman', Times, serif; */
        text-transform: capitalize;
    }

    h3 {
        /* font-family: 'Times New Roman', Times, serif; */
    }

    /* label,h2,h5{
        color: white !important;
     } */
    .main-bg-color {
        /* background-color: background-image: linear-gradient(to right, #314755 0%, #26a0da 51%, #314755 100%); */
    }
    
    /* .main-panel>.container {
        background-image: linear-gradient(to right, #314755 0%, #26a0da 51%, #314755 100%) !important;
        margin: 0px !important;
    } */

    .container {
        background: #1a2035 !important;
    }

    .main-header{
        background-color: #1a2035;
    }
    legend {
        color: white !important;
    }

    label {
        color: white !important;

    }

    .btn {
        border-radius: 5px !important;
    }

    .col-md-12 {
        border-radius: 5px !important;
    }

    .btn {
        background-image: linear-gradient(to right, #314755 0%, #26a0da 51%, #314755 100%) !important;
        font-size: 15px !important;
    }

    .btn {
        margin: 10px;
        padding: 15px 45px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        border: 0px !important;
        background-size: 200% auto;
        color: white;
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
        /* display: block; */
    }

    .btn:hover {
        background-position: right center;
        /* change the direction of the change here */
        color: #fff;
        text-decoration: none;
    }



    .select2 .select2-container .select2-container--default{
        width: 100% !important;
    }
</style>
