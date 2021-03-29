<!DOCTYPE html>
<html>
<style>
    <?php include 'index.css'; ?>
</style>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dakotah's Bookkeeping & Taxes</title>
</head>

<body>
    <input type="radio" name="menu_toggle" id="home-tog" checked="checked">
    <input type="radio" name="menu_toggle" id="sched-tog">
    <input type="radio" name="menu_toggle" id="info-tog">
    <input type="radio" name="menu_toggle" id="tool-tog">
    <input type="radio" name="menu_toggle" id="news-tog">

    <div id="title-bar">
        <div id="title">
            <div>Dakotah's Bookkeeping & Taxes</div>
        </div>

        <div id="menu-bar">
            <label for="home-tog" id="home-label" tabindex="1"><i class="material-icons">home</i> Home</label>
            <label for="sched-tog" id="sched-label" tabindex="2"><i class="material-icons">schedule</i> Scheduling</label>
            <label for="info-tog" id="info-label" tabindex="3"><i class="material-icons">info</i> Tax Info</label>
            <label for="tool-tog" id="tool-label" tabindex="4"><i class="material-icons">construction</i> Tax Tools</label>
            <label for="news-tog" id="news-label" tabindex="5"><i class="material-icons">web</i> Tax News</label>
        </div>
    </div>

    <div id="tab-content">
        <div id="home-content">
            <p>Welcome to Dakotah's Bookkeeping & Taxes!</p>
            <p>This site is still under construction.</p>
            <p>You can still contact us with the info at the bottom of the page.</p>
        </div>

        <div id="sched-content">
            <p>Scheduling Content - Under Construction</p>
        </div>

        <div id="info-content">
            <p>Tax Info - Under Construction</p>
        </div>

        <div id="tool-content">
            <p>Tax Tools - Under Construction</p>
        </div>

        <div id="news-content">
            <p>Tax News - Under Construction</p>
        </div>
    </div>

    <footer id="footer">
        <div id="footer-contact">
            <div>CONTACT US</div>
            <!-- <div>Address</div> -->
            <div>PHONE: (724) 638-7495</div>
            <div>FAX: (724) 835-8524</div>
            <div>EMAIL: taxwizard8@gmail.com</div>
        </div>

        <img src="/assets/cert-agent.jpg" height="100">
    </footer>
</body>

</html>