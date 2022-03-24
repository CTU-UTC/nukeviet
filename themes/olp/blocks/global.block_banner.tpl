<!-- BEGIN: main -->
<div class="parallax">
    <div>
        {DATA.site_name}
    </div>
</div>

<style>
    .parallax {
        background-image: url('/{DATA.site_banner}');
        min-height: 200px; 
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 20px 150px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .parallax div {
        border: 5px solid #000;
        color: #000;
        font-size: 36px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }
</style>
<!-- END: main -->

