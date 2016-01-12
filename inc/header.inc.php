<!-- header -->
<header id="headerNav" class="headerNav">
    <nav class="container">
        <div id="headerLogo" class="headerLogo">Remote Loc</div><!-- place holder -->
        <div id="headerLinks">
            <?php
                if (isset($_SESSION['valid_rl_user']))
                {
                    $username = $_SESSION['valid_rl_user'];
                    echo "<a href=\"/\" class=\"BSButton_text\"><span>$username</span></a>";
                    echo "<a href=\"inc/logout.inc.php\" class=\"BSButton_text\">log out</a>";
                } 
                if (!isset($_SESSION['valid_rl_user']))
                {
                    echo "<a href=\"sp/login_shell.php?content=register\" class=\"BSButton_text\"><span>sign up</span></a>";
                    echo "<a href=\"sp/login_shell.php?content=login\" class=\"glyphicon glyphicon-log-in BSButton\"><span>login</span></a>";
                } 
                ?>
            <!-- Add Remote Location  -->
            <button type="button" class="btn btn-success primaryButton" onclick="addLoc('filter_div_underlay', 'filter_div', 'pod_overlay_container')">&plus;<span> add location</span></button>
            <!-- Include new location page -->
            <?php include("inc/newLoc.inc.php"); ?>
        </div>
    </nav>
</header>
<section class="jumbotron ct_section_bg">
  <div class="container">
    <header class="page-header">
        <div id="logo" class="logo">Remote Loc</div>    
        <h3>Find a remote work place</h3>
    </header>
  </div> 
</section>