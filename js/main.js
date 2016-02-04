window.onload = function() {
    var file = document.querySelector('#fileUpload');


    file.onchange = function (evt) {
        var files = evt.target.files[0],
            reader = new FileReader(),
            convertType = document.querySelectorAll('input[name="objType"]:checked');

        reader.onload = function (event) {
            // The file's text will be printed here
            //console.log(event.target.result);
            var result = convertData(event.target.result, convertType[0].value),
                area = document.querySelector('#screen');
            area.innerHTML = result;
            console.log(result);
        };

        reader.readAsText(files);
    };
}
    function convertData(dataObj, type) {
        var qInner,
            qOuter,
            bBegin,
            bEnd,
            data = dataObj.split('\n'),
            len = data.length,
            i = 0,
            obj = '',
            comma = ', ';


        // test for quote type
        //make attr later
        if (+type === 1 || +type === 3) {
            qInner = "\'";
            qOuter = '\"';
            console.log('First');
        } else {
            qInner = '\"';
            qOuter = "\'";
        }
        // test for array or object
        // make an attr later
        if (type > 2) {
            bBegin = '{';
            bEnd = '}';
        } else {
            bBegin = '[';
            bEnd = ']';
        }

        obj += bBegin;
        for (; i < len; ++i) {
            if (i === len - 1) {
                comma = '';
            }
            console.log(i);
            //if (type === 1 || 3) {
            //    obj += (qInner + data[i] + qInner + comma);
            //} else {
            //    obj += ( 'd' + data[i] + '&quot;' + comma);
            //}
            obj += (qInner + data[i] + qInner + comma);
        }
        obj += bEnd;
        return obj;
    }