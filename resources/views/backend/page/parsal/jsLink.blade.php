<!-- Core -->
<script src="{{asset('backend/assets/vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Vendor JS -->
<script src="{{asset('backend/assets/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

<!-- jquery JS -->
<script src="{{asset('backend/assets/vendor/jquery/jquery-3.6.0.min.js')}}"></script>

<!-- Slider -->
<script src="{{asset('backend/assets/vendor/nouislider/distribute/nouislider.min.js')}}"></script>

<!-- Smooth scroll -->
<script src="{{asset('backend/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

<!-- Charts -->
<script src="{{asset('backend/assets/vendor/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

<!-- Sweet Alerts 2 -->
<script src="{{asset('backend/assets/vendor/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="{{asset('backend/assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Notyf -->
<script src="{{asset('backend/assets/vendor/notyf/notyf.min.js')}}"></script>

<!-- Simplebar -->
<script src="{{asset('backend/assets/vendor/simplebar/dist/simplebar.min.js')}}"></script>

<!-- choices -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/choices/scripts/choices.min.js') }}">

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- video player -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelement-and-player.min.js"></script>
<script src="{{asset('backend/assets/playlist/playlist.js')}}"></script>




<!-- livewire js -->
@livewireScripts

<script>
    function showvideonote() {
        document.getElementById('showallnote').classList.remove('d-none','d-xl-block');
        document.getElementById('showallnote').classList.add("d-block");
    }
    function hidevideonote() {
        document.getElementById('showallnote').classList.remove("d-block");
        document.getElementById('showallnote').classList.add('d-none','d-xl-block');
    }
    function hidesidebartext() {
        document.getElementById('sidebarMenu').classList.toggle("iconsidebar");
        document.getElementById('content').classList.toggle("iconsidebarcontent");
    }


    var mediaElements = document.querySelectorAll('video');

    for (var i = 0, total = mediaElements.length; i < total; i++) {
        new MediaElementPlayer(mediaElements[i], {
            //if want playlist just past 'playlist', 'shuffle', after volume also you can use 'prevtrack', 'nexttrack',//
            features: ['playpause', 'current', 'progress', 'duration', 'volume', 'loop', 'fullscreen'],
        });
    }

    /// delete video warning alert
    document.getElementById('deletevideo').addEventListener('click', function () {
        Swal.fire(
            'Wanna delete!',
            'How To Make Video Gallery In HTML And CSS Website Step By Step Tutorials',
            'warning'
        )
    });


    function updateStoreImagebutton(name) {
        //console.log(name);
        document.getElementById(name).submit();
    }

</script>


<!-- Volt JS -->
@stack('js')
<script src="{{asset('backend/chart.js')}}"></script>
<script src="{{asset('backend/assets/js/volt.js')}}"></script>

