//编写一个可以对异步函数做异常处理的代码
var fs = require('fs');

function FileObject() {
    this.filename = '';

    this.file_exists = function (callback) {
        console.log("About to open :", this.filename);
        fs.open(this.filename, 'r', function (err, handle) {
            if (err) {
                console.log("Cant open ", + this.filename);
                callback(err);
                return;
            } else {
                fs.close(handle, function () {});
                callback(null, true);
            }
        })
    }
}

var fo = new FileObject();
fo.filename = "file_that_does_not_exist";
fo.file_exists(function (err, results) {
    if (err) {
        console.log("when call file_exists error\n" + JSON.stringify(err));
        return;
    }
    console.log("file exists!!");
});