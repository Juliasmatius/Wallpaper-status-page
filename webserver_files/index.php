<style>
    body {
        background-color: #00040f;
    }
    pre {
        background-color: #00040f;
    }
    iframe {
        border: 0px;
        overflow: hidden;
    }

    .logo {
        position: absolute;
        top:40%;
        left: 33%;
        transform: translate(-50%, -50%);
    }

    .fetch {
        position: absolute;
        top:42%;
        left: 60%;
        transform: translate(-50%, -50%);
    }
    .clock {
        align: center;
        position: absolute;
        top:12%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<div class="clock">
    <?php include "time.php"; ?>
</div>


<div class="logo">
    <?php include "logo.html"; ?>
</div>

<div class="fetch">
    <?php include "fastfetch.php"; ?>
</div>