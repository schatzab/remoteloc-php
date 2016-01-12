<!-- New Location Overlay -->
<aside class="container_addLoc">
    <!-- overlay  -->
    <section class="pod_overlay_container">
        <div id="filter_div">
            <!-- close X -->
            <a onclick="closeOverlay('filter_div_underlay', 'filter_div')"><div class="close_overlay">&nbsp;&nbsp;X</div></a>
            <!-- Overlay Content -->
            <h2>Add a Remote Location</h2>
                <form action="../index.php" method="post">
                    <input type="text" id="locName" class="text_field_generic" value="Business Name" onclick="if(this.value=='Business Name'){this.value=''}" onblur="if (this.value==''){this.value='Business Name'}"><br><br>
                    <textarea name="comments" class="text_field_generic" value="Comments" onclick="if(this.value=='Comments'){this.value=''}" onblur="if (this.value==''){this.value='Comments'}"></textarea><br><br>
                    <input type="submit" value="ADD LOCATION" class="gen_button_prominent">
                    <input type="hidden" name="content" value="addLoc">
                    <!-- hidden variable sends to addLoc -->
                </form>
        </div>
    </section>
    <!-- underlay -->
    <div id="filter_div_underlay" onclick="closeOverlay('filter_div_underlay', 'filter_div')"></div>
</aside>