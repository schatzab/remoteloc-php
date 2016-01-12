<!-- New Location Overlay -->
<aside class="container_addLoc">
    <!-- overlay  -->
    <section class="pod_overlay_container">
        <div id="filter_div">
            <!-- close X -->
            <a onclick="closeOverlay('filter_div_underlay', 'filter_div')"><div class="close_overlay">&nbsp;&nbsp;X</div></a>
            <!-- Overlay Content -->
            <h2>Add a Remote Location</h2>
                <form action="index.php" method="post">
                    <!-- Business Name -->
                    <input type="text" id="locName" name="name" class="text_field_generic" value="Business Name *" onclick="if(this.value=='Business Name *'){this.value=''}" onblur="if (this.value==''){this.value='Business Name *'}"><br><br>
                    <!-- City -->
                    <input type="text" id="locCity" name="city" class="text_field_generic" value="City *" onclick="if(this.value=='City *'){this.value=''}" onblur="if (this.value==''){this.value='City *'}"><br><br>
                    <!-- State -->
                    <input type="text" id="locState" name="state" class="text_field_generic" value="State *" onclick="if(this.value=='State *'){this.value=''}" onblur="if (this.value==''){this.value='State *'}"><br><br>
                    <!-- Comments -->
                    Comments: <br>
                    <textarea name="locDesc" class="text_field_generic" value="Comments"></textarea><br><br>
                    <!-- Submit -->
                    <input type="submit" value="ADD LOCATION" class="gen_button_prominent">
                    <input type="hidden" name="content" value="addLoc">
                    <!-- hidden variable sends to addLoc -->
                </form>
        </div>
    </section>
    <!-- underlay -->
    <div id="filter_div_underlay" onclick="closeOverlay('filter_div_underlay', 'filter_div')"></div>
</aside>