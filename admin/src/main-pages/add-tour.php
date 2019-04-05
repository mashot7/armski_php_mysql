<!-- OVERVIEW CONTENT -->
<div style="display: block;" id="overview" class="tabcontent p-4">
    <form id="" action="conf.php?pages=add-tour&cmd=add-page" method="post" onsubmit="return submitData(this)">
        <!--onsubmit="return submitData(this)" -->
        <strong>Tour Title:* </strong> <textarea class="form-control" rows="1" name="tour-title"></textarea><br>
        <strong>Tour Description:* </strong> <textarea class="form-control" rows="4" name="tour-description"></textarea><br>
        <div class="form-group">
            <label for="sel1"><strong>Category (select one):*</strong></label>
            <select class="form-control" id="sel1" name="category">
                <option value="Skiing">Skiing</option>
                <option value="Adventure">Adventure</option>
                <option value="Culture"> Culture</option>
            </select> </div> <strong>Image(URL):* </strong> <textarea class="form-control" rows="1" name="tour-img"></textarea><br>
        <strong>Duration:* </strong> <textarea class="form-control" rows="1" name="duration"></textarea><br>
        <strong>Beginning:* </strong> <textarea class="form-control" rows="1" name="begin"></textarea><br>
        <strong>Ending:* </strong><textarea class="form-control" rows="1" name="end"></textarea><br>
        <strong>Best season:* </strong><textarea class="form-control" rows="1" name="season"></textarea><br>
        <strong>Location:* </strong><textarea class="form-control" rows="1" name="location"></textarea><br>
        <strong>Price:* </strong><textarea class="form-control" rows="1" name="price"></textarea><br>
        <strong>Accommodation:* </strong><textarea class="form-control" rows="1" name="accom"></textarea><br>
        <strong>Food:* </strong><textarea class="form-control" rows="1" name="food"></textarea><br>
        <strong>Mode of travel:* </strong><textarea class="form-control" rows="1" name="travelMod"></textarea><br>
        <strong>Number of people:* </strong><textarea class="form-control" rows="1" name="peopleNum"></textarea><br>
        <strong>Included:* </strong><textarea class="form-control" rows="5" name="include"></textarea><br>
        <strong>Excluded:* </strong><textarea class="form-control" rows="1" name="exclude"></textarea><br>

        <strong>Package details:</strong><br>
        <div class="" id="addTourDays">
            <label for="dayTitle"> <strong> Title:*</strong></label><textarea id="dayTitle" class="form-control" rows="1" name="title[0]"></textarea>
            <label for="dayPos"><strong>Position:* </strong></label><textarea id="dayPos" class="form-control" rows="1" id="weight" name="weight[0]"></textarea>
            <label><strong>Description:* </strong></label><textarea id="dayDesc" class="form-control" rows="3" name="description[0]"></textarea><br>
        </div>
        <hr>
        <a onclick="addDay()" class="text-white button">ADD DAY</a>
        <div class="d-flex flex-row-reverse"><button style="margin-top:0px; margin-bottom:15px;" class="button" id="sub" type="submit">SAVE</button></div>
    </form>
</div>