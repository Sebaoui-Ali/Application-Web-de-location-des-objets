<script type="text/javascript" src="{{ asset('MDB/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('MDB/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('MDB/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('MDB/js/mdb.min.js') }}"></script>

    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        var slider = $("#calculatorSlider");
        var developerBtn = $("#developerBtn");
        var corporateBtn = $("#corporateBtn");
        var privateBtn = $("#privateBtn");
        var reseller = $("#resellerEarnings");
        var client = $("#clientPrice");
        // var percentageBonus = 30; // = 30%
        var license = {
            corpo: {
                active: true,
                price: 319,
            },
            dev: {
                active: false,
                price: 149,
            },
            priv: {
                active: false,
                price: 79,
            }
        }

        function calculate(price, value) {
            client.text((Math.round((price - (value / 100 * price)))) + '$');
            reseller.text((Math.round(((percentageBonus - value) / 100 * price))) + '$')
        }

        function reset(price) {
            slider.val(0);
            client.text(price + '$');
            reseller.text((Math.round((percentageBonus / 100 * price))) + '$');
        }
        developerBtn.on('click', function (e) {
            license.dev.active = true;
            license.corpo.active = false;
            license.priv.active = false;
            reset(license.dev.price)
        });
        privateBtn.on('click', function (e) {
            license.dev.active = false;
            license.corpo.active = false;
            license.priv.active = true;
            reset(license.priv.price);
        });
        corporateBtn.on('click', function (e) {
            license.dev.active = false;
            license.corpo.active = true;
            license.priv.active = false;
            reset(license.corpo.price);
        });
        slider.on("input change", function (e) {
            if (license.priv.active) {
                calculate(license.priv.price, $(this).val());
            } else if (license.corpo.active) {
                calculate(license.corpo.price, $(this).val());
            } else if (license.dev.active) {
                calculate(license.dev.price, $(this).val());
            }
        })
    </script>
    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script>
