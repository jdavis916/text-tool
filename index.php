<?php require('includes/header.php');?>
<?php //require('includes/menu.php');?>
    <style>
        .strip code{
            display: inline-block;
            background-color: #EEE;
            border: 1px solid #000;
            height: 300px;
            width: 300px;
        }
    </style>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 m4">
                    <form>
                        <input type="file" id="fileUpload">
                        <fieldset id="objectType">
                            <legend>Convert </legend>
                            <input type="radio" name="objType" id="type1" value="1" />
                            <label for="type1">File to Array (single quotes)</label>
                            <input type="radio" name="objType" id="type2" value="2" />
                            <label for="type2">File to Array (double quotes)</label>
                            <input type="radio" name="objType" id="type3" value="3" />
                            <label for="type3">File to Object (single quotes)</label>
                            <input type="radio" name="objType" id="type4" value="4" />
                            <label for="type4">File to Object (double quotes)</label>
                            <input type="radio" name="objType" id="type5" value="5" />
                            <label for="type5">CSV to Array (single quotes)</label>
                            <input type="radio" name="objType" id="type6" value="6" />
                            <label for="type6">CSV to Array (double quotes)</label>
                            <input type="radio" name="objType" id="type7" value="7" />
                            <label for="type7">CSV to Object (single quotes)</label>
                            <input type="radio" name="objType" id="type8" value="8" />
                            <label for="type8">CSV to Object (double quotes)</label>
                        </fieldset>
                    </form>
                </div>
                <div class="col s12 m4">
                    <div id="screen">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <form>
                        <input type="file" id="fileUpload">
                        <fieldset id="strip" class="strip">
                            <legend>Strip</legend>
                            <code id="" class="">

                            </code>
                            <input type="radio" name="textType" id="text1" value="1" />
                            <label for="type1">CSV (no spaces)</label>
                            <input type="radio" name="textType" id="text2" value="2" />
                            <label for="type2">CSV (spaces)</label>
                            <input type="radio" name="textType" id="text3" value="3" />
                            <label for="type3">Text File</label>
                            <input type="radio" name="textType" id="text4" value="4" />
                            <label for="type4">Object (double quotes)</label>
                        </fieldset>
                    </form>
                </div>
                <div class="col s12 m4">
                    <div id="screen">

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require('includes/footer.php');?>