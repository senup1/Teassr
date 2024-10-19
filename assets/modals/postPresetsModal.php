<div id="postPresetsModal">
    <div class="postPresetModalContent">
        <span class="closePostModal" onclick="closePostPresetModal()">&times;</span>
        <div id="postPresetHeader">New Post</div>
        <input id="titlePresetPost" type="text" placeholder="Enter a title for your post">
        <form method="POST" id="postPresetOptions">
            
            <div class="postPresetOption">
                <img src="../assets/imgs/ppl/ppl1.png">
                <input name="postImage" type="radio" value="test1">
            </div>
            <div class="postPresetOption">
                <input name="postImage" type="radio" value="test2">
            </div>
            <div class="postPresetOption">
                <input name="postImage" type="radio" value="test3">
            </div>
            
<!-- we just have to include a few inputs of type checkbox and use their given features to
 have one of however many images selected and submitted and then we'll be done (ill do this unless
 you want to -ss -->
        </form>
    </div>
    <button class="postPresetsModalClose" onclick="closePostPresetModal()"></button>
</div>