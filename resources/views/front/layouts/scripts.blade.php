<script src="{{ asset('dist-front/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('dist-front/js/popper.min.js') }}"></script>
<script src="{{ asset('dist-front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist-front/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('dist-front/js/jquery-ui.js') }}"></script>
<script src="{{ asset('dist-front/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('dist-front/js/bxslider.js') }}"></script>
<script src="{{ asset('dist-front/js/mixitup.js') }}"></script>
<script src="{{ asset('dist-front/js/wow.js') }}"></script>
<script src="{{ asset('dist-front/js/appear.js') }}"></script>
<script src="{{ asset('dist-front/js/select2.min.js') }}"></script>
<script src="{{ asset('dist-front/js/swiper.min.js') }}"></script>
<script src="{{ asset('dist-front/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('dist-front/js/owl.js') }}"></script>
<script src="{{ asset('dist-front/js/script.js') }}"></script>

@if ($global_setting->google_recaptcha_status == 'Show')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: 'error',
                title: '{{ $error }}'
            });
        </script>
    @endforeach
@endif
@if (Session::has('error'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: 'error',
            title: '{{ Session::get('error') }}'
        });
    </script>
@endif
@if (Session::has('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "{{ Session::get('success') }}"
        });
    </script>
@endif
@if (Session::has('info'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 1800,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "info",
            title: "{{ Session::get('info') }}"
        });
    </script>
@endif

<script>
    $(document).ready(function() {
        $('.dropdown').on('show.bs.dropdown', function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
        });
        // Add slideUp animation to Bootstrap dropdown when collapsing.
        $('.dropdown').on('hide.bs.dropdown', function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
        });
        $('#searchlink').on('click', function(e) {
            e.preventDefault();
            $(this).parent().toggleClass('open');
        });
        $(document).on("click", function(e) {
            if ($(e.target).parent().is("#searchlink") === false &&
                $(e.target).is("#search") === false) {
                $("#search-wrapper").removeClass("open");
            }
        });
    });

    const menu = document.querySelector(".menu");
    const menuMain = menu.querySelector(".menu-main");
    const goBack = menu.querySelector(".go-back");
    const menuTrigger = document.querySelector(".mobile-menu-trigger");
    const closeMenu = menu.querySelector(".mobile-menu-close");
    let subMenu;
    menuMain.addEventListener("click", (e) => {
        if (!menu.classList.contains("active")) {
            return;
        }
        if (e.target.closest(".menu-item-has-children")) {
            const hasChildren = e.target.closest(".menu-item-has-children");
            showSubMenu(hasChildren);
        }
    });
    goBack.addEventListener("click", () => {
        hideSubMenu();
    })
    menuTrigger.addEventListener("click", () => {
        toggleMenu();
    })
    closeMenu.addEventListener("click", () => {
        toggleMenu();
    })
    document.querySelector(".menu-overlay").addEventListener("click", () => {
        toggleMenu();
    })

    function toggleMenu() {
        menu.classList.toggle("active");
        document.querySelector(".menu-overlay").classList.toggle("active");
    }

    function showSubMenu(hasChildren) {
        subMenu = hasChildren.querySelector(".sub-menu");
        subMenu.classList.add("active");
        subMenu.style.animation = "slideLeft 0.5s ease forwards";
        const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
        menu.querySelector(".current-menu-title").innerHTML = menuTitle;
        menu.querySelector(".mobile-menu-head").classList.add("active");
    }

    function hideSubMenu() {
        subMenu.style.animation = "slideRight 0.5s ease forwards";
        setTimeout(() => {
            subMenu.classList.remove("active");
        }, 300);
        menu.querySelector(".current-menu-title").innerHTML = "";
        menu.querySelector(".mobile-menu-head").classList.remove("active");
    }

    window.onresize = function() {
        if (this.innerWidth > 991) {
            if (menu.classList.contains("active")) {
                toggleMenu();
            }

        }
    }

    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $(".menu-area").removeClass("sticky");
        } else {
            $(".menu-area").addClass("sticky");
        }
    });
</script>
