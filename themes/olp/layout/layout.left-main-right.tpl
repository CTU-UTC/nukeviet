<!-- BEGIN: main -->
{FILE "header_only.tpl"}
{FILE "header_extended.tpl"}

<div class="row">
    <div class="col-md-4 col-sm-6 navbar" style="border-radius: 0">
        <div class="toggle-button">
            &equiv;
        </div>
        <div class="navbar-wrapper">
            [LOGO]
            [LEFT]
        </div>
    </div>
    <div class="col-md-20 col-sm-18 content">
        [TOP]
        {MODULE_CONTENT}
        [FOOTER]
    </div>
</div>
<style>
    .navbar {
        background: #000;
        height: 100vh;
        transition: .4s ease;
        position: relative;
    }
    .navbar-wrapper {
        height: 100%;
        overflow: auto;
    }
    .content {
        height: 100vh;
        overflow: auto;
    }

    .toggle-button {
        position: absolute;
        left: 100%;
        width: 50px;
        height: 50px;
        background: #000;
        color: #fff;
        cursor: pointer;
        display: none;
        font-size: 20px;
    }

    @media screen and (max-width: 767px) {
        .navbar {
            position: fixed;
            left: -100%;
            width: 100%;
            bottom: 0;
            top: 0;
            z-index: 100;
        }
        .navbar.active {
            left: 0;
        }
        .toggle-button {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .navbar.active .toggle-button {
            transform: translateX(-100%);
            position: relative;
        }
    }
</style>

<script>
    const toggleButton = document.querySelector('.toggle-button')
    toggleButton.onclick = () => document.querySelector('.navbar').classList.toggle('active')
</script>

{FILE "footer_extended.tpl"}
{FILE "footer_only.tpl"}
<!-- END: main -->