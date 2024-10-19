<div id="postPresetsModal">
    <div class="postPresetModalContent">
        <span class="closePostModal" onclick="closePostPresetModal()">&times;</span>
        <div id="postPresetHeader">New Teass</div>
        <input form="postPresetOptions" name="presetPostTitle" id="titlePresetPost" type="text" placeholder="Enter a title for your teass">
        <form method="POST" id="postPresetOptions">
            <div class="postPresetOption">
                <input onclick="presetImageSelected(this)" name="postImage" type="radio" value="../assets/imgs/ppl/ppl1.png">
                <img src="../assets/imgs/ppl/ppl1.png">
            </div>
            <div class="postPresetOption">
                <input onclick="presetImageSelected(this)" name="postImage" type="radio" value="../assets/imgs/ppl/ppl2.png">
                <img src="../assets/imgs/ppl/ppl2.png">
            </div>
            <div class="postPresetOption">
                <input onclick="presetImageSelected(this)" name="postImage" type="radio" value="../assets/imgs/ppl/ppl3.png">
                <img src="../assets/imgs/ppl/ppl3.png">
            </div>
            <div class="postPresetOption">
                <input onclick="presetImageSelected(this)" name="postImage" type="radio" value="../assets/imgs/ppl/ppl4.png">
                <img src="../assets/imgs/ppl/ppl4.png">
            </div>
            <div class="postPresetOption">
                <input onclick="presetImageSelected(this)" name="postImage" type="radio" value="../assets/imgs/ppl/ppl5.png">
                <img src="../assets/imgs/ppl/ppl5.png">
            </div>
            <div class="postPresetOption">
                <input onclick="presetImageSelected(this)" name="postImage" type="radio" value="../assets/imgs/ppl/ppl6.png">
                <img src="../assets/imgs/ppl/ppl6.png">
            </div>
            <button id="postPresetButton" type="button">Post</button>
        </form>
    </div>
    <button class="postPresetsModalClose" onclick="closePostPresetModal()" disabled></button>
</div>